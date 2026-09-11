@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Editar Endereço</h1>

    <form action="{{ route('addresses.update', $address->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Cliente</label>
            <select name="customer_id" class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
                <option value="">Selecione o Cliente</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}" {{ $address->customer_id == $customer->id ? 'selected' : '' }}>
                        {{ $customer->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Rua / Número</label>
            <input type="text" name="street" value="{{ old('street', $address->street) }}" class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2">Cidade</label>
            <input type="text" name="city" value="{{ old('city', $address->city) }}" class="w-full border border-gray-300 rounded-lg px-3 py-2" required>
        </div>

        <div class="flex justify-end space-x-3">
            <a href="{{ route('addresses.index') }}" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">Cancelar</a>
            <button type="submit" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">Atualizar</button>
        </div>
    </form>
</div>
@endsection