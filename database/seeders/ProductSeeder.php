<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products; 

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Arroz Tipo 1 5kg', 'price' => 28.90, 'stock' => 50],
            ['name' => 'Feijão Carioca 1kg', 'price' => 8.50, 'stock' => 40],
            ['name' => 'Óleo de Soja 900ml', 'price' => 7.20, 'stock' => 60],
            ['name' => 'Açúcar Cristal 1kg', 'price' => 4.80, 'stock' => 80],
            ['name' => 'Café Torrado e Moído 500g', 'price' => 18.90, 'stock' => 35],
            ['name' => 'Leite Integral 1L', 'price' => 5.49, 'stock' => 100],
            ['name' => 'Pão de Forma Tradicional', 'price' => 9.50, 'stock' => 25],
            ['name' => 'Margarina com Sal 500g', 'price' => 11.90, 'stock' => 30],
            ['name' => 'Queijo Mussarela Fatiado 200g', 'price' => 14.00, 'stock' => 20],
            ['name' => 'Peito de Frango Congelado 1kg', 'price' => 19.90, 'stock' => 40],
            ['name' => 'Carne Bovina Patinho 1kg', 'price' => 38.90, 'stock' => 15],
            ['name' => 'Detergente Líquido 500ml', 'price' => 2.49, 'stock' => 120],
            ['name' => 'Papel Higiênico Folha Dupla 4 Rolos', 'price' => 7.90, 'stock' => 50],
            ['name' => 'Refrigerante Cola 2L', 'price' => 9.99, 'stock' => 70],
            ['name' => 'Água Mineral sem Gás 1.5L', 'price' => 3.50, 'stock' => 90],
            ['name' => 'Sabão em Pó 1kg', 'price' => 12.50, 'stock' => 45],
            ['name' => 'Ovos Brancos Dúzia', 'price' => 10.90, 'stock' => 30],
            ['name' => 'Macarrão Espaguete 500g', 'price' => 5.20, 'stock' => 60],
            ['name' => 'Molho de Tomate 340g', 'price' => 3.80, 'stock' => 75],
            ['name' => 'Creme de Leite 200g', 'price' => 4.20, 'stock' => 85],
        ];

        foreach ($products as $product) {
            Products::create($product);
        }
    }
}
