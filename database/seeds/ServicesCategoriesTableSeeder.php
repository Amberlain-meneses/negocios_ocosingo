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
        ]);
        Category::create([
            'category_name' => 'Pastelería',
        ]);
        Category::create([
            'category_name' => 'Tienda de ropa',
        ]);
        Category::create([
            'category_name' => 'Panadería',
        ]);
        Category::create([
            'category_name' => 'Bar',
        ]);
        Category::create([
            'category_name' => 'Restaurante',
        ]);
        Category::create([
            'category_name' => 'Pizzería',
        ]);
        Category::create([
            'category_name' => 'Cafetería',
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
