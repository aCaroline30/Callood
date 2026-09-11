@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Endereços</h1>
    <a href="{{ route('address.create') }}" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">Novo Endereço</a>
</div>

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Rua</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Número</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Cidade</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Ações</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($addresses as $address)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $address->street }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $address->number }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $address->city }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('address.show', $address->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Ver</a>
                    <a href="{{ route('address.edit', $address->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Editar</a>
                    <form action="{{ route('address.destroy', $address->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Tem certeza?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection