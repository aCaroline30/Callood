@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Pedido #{{ $order->id }}</h1>

    <div class="mb-4">
        <p><strong>Cliente:</strong> {{ $order->customer->name ?? 'N/A' }}</p>
        <p><strong>Endereço:</strong> {{ $order->address->street ?? 'N/A' }}, {{ $order->address->city ?? '' }}</p>
        <p><strong>Status:</strong> <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded text-sm">{{ $order->status ?? 'Pendente' }}</span></p>
    </div>

    <h3 class="text-lg font-bold text-gray-700 mt-6 mb-2">Itens Comprados</h3>
    <table class="min-w-full divide-y divide-gray-200 border">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Produto</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Qtd</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase">Preço Unit.</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach($order->products as $item)
            <tr>
                <td class="px-4 py-2">{{ $item->name }}</td>
                <td class="px-4 py-2">{{ $item->pivot->quantity }}</td>
                <td class="px-4 py-2">R$ {{ number_format($item->price, 2, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-6 flex justify-end">
        <a href="{{ route('orders.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg">Voltar</a>
    </div>
</div>
@endsection