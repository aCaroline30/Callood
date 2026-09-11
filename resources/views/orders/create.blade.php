@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Novo Pedido (Checkout)</h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Cliente</label>
            <select name="customer_id" class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
                <option value="">Selecione o Cliente</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Endereço de Entrega</label>
            <select name="address_id" class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
                <option value="">Selecione o Endereço</option>
                @foreach($addresses as $address)
                    <option value="{{ $address->id }}">{{ $address->street }} - {{ $address->city }}</option>
                @endforeach
            </select>
        </div>

        <hr class="my-6">

        <h3 class="text-lg font-bold text-gray-700 mb-4">Produtos do Pedido</h3>
        <div class="space-y-3">
            @foreach($products as $product)
            <div class="flex items-center justify-between bg-gray-50 p-3 rounded-lg border">
                <div>
                    <span class="font-medium">{{ $product->name }}</span>
                    <span class="text-sm text-gray-500 block">R$ {{ number_format($product->price, 2, ',', '.') }}</span>
                </div>
                <div>
                    <input type="hidden" name="products[{{ $loop->index }}][product_id]" value="{{ $product->id }}">
                    <input type="number" name="products[{{ $loop->index }}][quantity]" min="0" value="0" placeholder="Qtd" class="w-24 border border-gray-300 rounded-lg px-2 py-1 text-center">
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-6 flex justify-end space-x-3">
            <a href="{{ route('orders.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">Cancelar</a>
            <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">Finalizar Pedido</button>
        </div>
    </form>
</div>
@endsection