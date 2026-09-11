@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Clientes</h1>
    <a href="{{ route('customer.create') }}" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">Novo Cliente</a>
</div>

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nome</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">E-mail</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Telefone</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Ações</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($customers as $customer)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $customer->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $customer->email }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-gray-800">{{ $customer->phone }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ route('customer.show', $customer->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Ver</a>
                    <a href="{{ route('customer.edit', $customer->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Editar</a>
                    <form action="{{ route('customer.destroy', $customer->id) }}" method="POST" class="inline">
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