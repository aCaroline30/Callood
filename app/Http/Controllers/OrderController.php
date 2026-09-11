<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['address', 'products'])->get();

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(StoreOrderRequest $request)
    {
        $data = $request->validated();

        $order = Order::create([
            'address_id' => $data['address_id'],
            'delivery_date' => $data['delivery_date'],
        ]);

        // Attach products with pivot data (quantity)
        $products = [];
        foreach ($data['products'] as $product) {
            $products[$product['id']] = ['quantity' => $product['quantity']];
        }
        $order->products()->attach($products);

        return redirect()->route('orders.index')->with('success', 'Pedido criado com sucesso.');
    }

    public function show(Order $order)
    {
        $order->load(['address', 'products']);

        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $order->load(['products']);

        return view('orders.edit', compact('order'));
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        $data = $request->validated();

        $order->update(array_filter([
            'address_id' => $data['address_id'] ?? null,
            'delivery_date' => $data['delivery_date'] ?? null,
        ]));

        if (isset($data['products'])) {
            $products = [];
            foreach ($data['products'] as $product) {
                $products[$product['id']] = ['quantity' => $product['quantity']];
            }
            $order->products()->sync($products);
        }

        return redirect()->route('orders.index')->with('success', 'Pedido atualizado com sucesso.');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Pedido removido com sucesso.');
    }
}
