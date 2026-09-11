@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Cadastrar Endereço</h1>

    <form action="{{ route('addresses.store') }}" method="POST">
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
            <label class="block text-gray-700 font-medium mb-2">CEP / Rua / Número</label>
            <input type="text" name="street" placeholder="Rua, Número, Bairro" class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Cidade / Estado</label>
            <input type="text" name="city" class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
        </div>
        <div class="flex justify-end space-x-3">
            <a href="{{ route('addresses.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">Cancelar</a>
            <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-lg">Salvar</button>
        </div>
    </form>
</div>
@endsection