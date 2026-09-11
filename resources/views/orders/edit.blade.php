@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Editar Pedido #{{ $order->id }}</h1>

    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Cliente</label>
            <select name="customer_id" class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
                <option value="">Selecione o Cliente</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $order->customer_id == $customer->id ? 'selected' : '' }}>
                        {{ $customer->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Endereço de Entrega</label>
            <select name="address_id" class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
                <option value="">Selecione o Endereço</option>
                @foreach($addresses as $address)
                    <option value="{{ $address->id }}" {{ $order->address_id == $address->id ? 'selected' : '' }}>
                        {{ $address->street }} - {{ $address->city }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Status do Pedido</label>
            <select name="status" class="w-full border border-gray-300 rounded-lg px-3 py-2">
                <option value="Pendente" {{ ($order->status ?? '') == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                <option value="Em preparo" {{ ($order->status ?? '') == 'Em preparo' ? 'selected' : '' }}>Em preparo</option>
                <option value="Saiu para entrega" {{ ($order->status ?? '') == 'Saiu para entrega' ? 'selected' : '' }}>Saiu para entrega</option>
                <option value="Entregue" {{ ($order->status ?? '') == 'Entregue' ? 'selected' : '' }}>Entregue</option>
            </select>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('orders.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">Cancelar</a>
            <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">Atualizar</button>
        </div>
    </form>
</div>
@endsection