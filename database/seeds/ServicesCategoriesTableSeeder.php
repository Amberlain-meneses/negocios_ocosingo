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
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Pastelería',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Tienda de ropa',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Panadería',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Bar',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Restaurante',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Pizzería',
            'is_verified' => '1',
        ]);
        Category::create([
            'category_name' => 'Cafetería',
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
