<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;
use App\Models\Address;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Address::all();

        return view('address.index', compact('addresses'));
    }

    public function create()
    {
        return view('address.create');
    }

    public function store(StoreAddressRequest $request)
    {
        Address::create($request->validated());

        return redirect()->route('address.index')->with('success', 'Endereço criado com sucesso.');
    }

    public function show(Address $address)
    {
        return view('address.show', compact('address'));
    }

    public function edit(Address $address)
    {
        return view('address.edit', compact('address'));
    }

    public function update(UpdateAddressRequest $request, Address $address)
    {
        $address->update($request->validated());

        return redirect()->route('address.index')->with('success', 'Endereço atualizado com sucesso.');
    }

    public function destroy(Address $address)
    {
        $address->delete();

        return redirect()->route('address.index')->with('success', 'Endereço removido com sucesso.');
    }
}
