@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6 border-b pb-4">
        <h1 class="text-2xl font-bold text-gray-800">Detalhes do Endereço</h1>
    </div>

    <div class="space-y-4">
        <div>
            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Rua</label>
            <p class="text-gray-800 text-lg font-medium">{{ $address->street }}</p>
        </div>

        <div>
            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Número</label>
            <p class="text-gray-800 text-lg font-medium">{{ $address->number }}</p>
        </div>

        <div>
            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Cidade</label>
            <p class="text-gray-800 text-lg font-medium">{{ $address->city }}</p>
        </div>
    </div>

    <div class="flex justify-end space-x-3 mt-8 pt-4 border-t">
        <a href="{{ route('address.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400 transition">Voltar</a>
        <a href="{{ route('address.edit', $address->id) }}" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 transition">Editar</a>
    </div>
</div>
@endsection