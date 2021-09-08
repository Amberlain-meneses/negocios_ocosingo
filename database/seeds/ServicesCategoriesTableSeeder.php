<?php

use App\Category;
use App\TypeService;
use Illuminate\Database\Seeder;

class ServicesCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'Taquería',
            'image' => 'taqueria.svg',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Pastelería',
            'image' => 'cake.svg',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Tienda de ropa',
            'image' => 'clothing.svg',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Panadería',
            'image' => 'bakery.svg',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Bar',
            'image' => 'bar.svg',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Restaurante',
            'image' => 'restaurant.svg',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Pizzería',
            'image' => 'pizza.svg',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Cafetería',
            'image' => 'coffe.svg',
            'is_verified' => '1',
        ]);

        TypeService::create([
            'service_type' => 'A domicilio',
        ]);
        TypeService::create([
            'service_type' => 'En sitio',
        ]);
        TypeService::create([
            'service_type' => 'Ambos',
        ]);
        
    }
}
