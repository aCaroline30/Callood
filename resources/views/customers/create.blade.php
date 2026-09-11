@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Cadastrar Cliente</h1>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Nome</label>
            <input type="text" name="name" class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">E-mail</label>
            <input type="email" name="email" class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Telefone</label>
            <input type="text" name="phone" class="w-full border border-gray-300 rounded-lg px-3 py-2">
        </div>
        <div class="flex justify-end space-x-3">
            <a href="{{ route('customers.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">Cancelar</a>
            <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-lg">Salvar</button>
        </div>
    </form>
</div>
@endsection