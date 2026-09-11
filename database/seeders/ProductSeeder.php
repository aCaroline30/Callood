<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; 

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Arroz Tipo 1 5kg', 
                'image' => 'arroz.jpg', 
                'description' => 'Arroz branco tipo 1 de excelente qualidade, pacote com 5kg.', 
                'price' => 28.90
            ],
            [
                'name' => 'Feijão Carioca 1kg', 
                'image' => 'feijao.jpg', 
                'description' => 'Feijão carioca novo, selecionado, pacote com 1kg.', 
                'price' => 8.50
            ],
            [
                'name' => 'Óleo de Soja 900ml', 
                'image' => 'oleo.jpg', 
                'description' => 'Óleo de soja refinado 900ml.', 
                'price' => 7.20
            ],
            [
                'name' => 'Açúcar Cristal 1kg', 
                'image' => 'acucar.jpg', 
                'description' => 'Açúcar cristal refinado 1kg.', 
                'price' => 4.80
            ],
            [
                'name' => 'Café Torrado e Moído 500g', 
                'image' => 'cafe.jpg', 
                'description' => 'Café torrado e moído sabor forte e marcante, 500g.', 
                'price' => 18.90
            ],
            [
                'name' => 'Leite Integral 1L', 
                'image' => 'leite.jpg', 
                'description' => 'Leite bovino integral UHT 1L.', 
                'price' => 5.49
            ],
            [
                'name' => 'Pão de Forma Tradicional', 
                'image' => 'pao.jpg', 
                'description' => 'Pão de forma macio tradicional, ideal para sanduíches.', 
                'price' => 9.50
            ],
            [
                'name' => 'Margarina com Sal 500g', 
                'image' => 'margarina.jpg', 
                'description' => 'Margarina cremosa com sal pote de 500g.', 
                'price' => 11.90
            ],
            [
                'name' => 'Queijo Mussarela Fatiado 200g', 
                'image' => 'queijo.jpg', 
                'description' => 'Queijo mussarela fatiado fresco, pacote com 200g.', 
                'price' => 14.00
            ],
            [
                'name' => 'Peito de Frango Congelado 1kg', 
                'image' => 'frango.jpg', 
                'description' => 'Filé de peito de frango congelado pacote de 1kg.', 
                'price' => 19.90
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}