<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(StoreCustomerRequest $request)
    {
        Customer::create($request->validated());

        return redirect()->route('customer.index')->with('success', 'Cliente criado com sucesso.');
    }

    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());

        return redirect()->route('customer.index')->with('success', 'Cliente atualizado com sucesso.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index')->with('success', 'Cliente removido com sucesso.');
    }
}

?>