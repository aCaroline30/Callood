@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-r-lg">
            <div class="flex items-center mb-2">
                <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="text-sm font-semibold text-red-800">Atenção! Corrija os erros abaixo:</h3>
            </div>
            <ul class="list-disc list-inside text-sm text-red-700 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1 class="text-2xl font-bold text-gray-800 mb-6">Editar Cliente</h1>

    <form action="{{ route('customer.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Nome</label>
            <input type="text" name="name" value="{{ old('name', $customer->name) }}" class="w-full border-gray-300 rounded-lg shadow-sm border px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">E-mail</label>
            <input type="email" name="email" value="{{ old('email', $customer->email) }}" class="w-full border-gray-300 rounded-lg shadow-sm border px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Telefone</label>
            <input type="text" name="phone" value="{{ old('phone', $customer->phone) }}" class="w-full border-gray-300 rounded-lg shadow-sm border px-3 py-2" required>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('customer.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">Cancelar</a>
            <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">Atualizar</button>
        </div>
    </form>
</div>
@endsection