@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6 border-b pb-4">
        <h1 class="text-2xl font-bold text-gray-800">Detalhes do Produto</h1>
        <span class="text-lg font-bold text-emerald-600">R$ {{ number_format($product->price, 2, ',', '.') }}</span>
    </div>

    @if($product->image)
        <div class="mb-6">
            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-64 object-cover rounded-lg border border-gray-200 shadow-sm">
        </div>
    @endif

    <div class="space-y-4">
        <div>
            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Nome</label>
            <p class="text-gray-800 text-lg font-medium">{{ $product->name }}</p>
        </div>
    </div>

    <div class="flex justify-end space-x-3 mt-8 pt-4 border-t">
        <a href="{{ route('product.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400 transition">Voltar</a>
        <a href="{{ route('product.edit', $product->id) }}" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 transition">Editar</a>
    </div>
</div>
@endsection