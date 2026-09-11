<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Customer\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            [
                'name' => 'Ana Carolina Silva',
                'email' => 'ana.carolina@email.com',
                'phone' => '(11) 98765-4321'
            ],
            [
                'name' => 'Carlos Eduardo Souza',
                'email' => 'carlos.eduardo@email.com',
                'phone' => '(21) 99888-7766'
            ],
            [
                'name' => 'Mariana Oliveira Santos',
                'email' => 'mariana.oliveira@email.com',
                'phone' => '(31) 97111-2233'
            ],
            [
                'name' => 'Lucas Gabriel Costa',
                'email' => 'lucas.gabriel@email.com',
                'phone' => '(41) 96555-4433'
            ],
            [
                'name' => 'Beatriz Lima Rocha',
                'email' => 'beatriz.lima@email.com',
                'phone' => '(51) 98444-3322'
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}