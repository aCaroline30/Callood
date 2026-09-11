@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">{{ isset($product) ? 'Editar Produto' : 'Cadastrar Produto' }}</h1>

    <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST">
        @csrf
        @if(isset($product)) @method('PUT') @endif

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Nome</label>
            <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}" class="w-full border-gray-300 rounded-lg shadow-sm border px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Preço (R$)</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $product->price ?? '') }}" class="w-full border-gray-300 rounded-lg shadow-sm border px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Estoque</label>
            <input type="number" name="stock" value="{{ old('stock', $product->stock ?? '') }}" class="w-full border-gray-300 rounded-lg shadow-sm border px-3 py-2" required>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('products.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">Cancelar</a>
            <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">Salvar</button>
        </div>
    </form>
</div>
@endsection