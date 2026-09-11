@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6 border-b pb-4">
        <h1 class="text-2xl font-bold text-gray-800">Detalhes do Cliente</h1>
    </div>

    <div class="space-y-4">
        <div>
            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Nome</label>
            <p class="text-gray-800 text-lg font-medium">{{ $customer->name }}</p>
        </div>

        <div>
            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">E-mail</label>
            <p class="text-gray-800 text-lg font-medium">{{ $customer->email }}</p>
        </div>

        <div>
            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Telefone</label>
            <p class="text-gray-800 text-lg font-medium">{{ $customer->phone }}</p>
        </div>
    </div>

    <div class="flex justify-end space-x-3 mt-8 pt-4 border-t">
        <a href="{{ route('customer.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400 transition">Voltar</a>
        <a href="{{ route('customer.edit', $customer->id) }}" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 transition">Editar</a>
    </div>
</div>
@endsection