<?php

namespace App\Providers;
use Spatie\Permission\Models\Permission;
//use App\Models\Permission;

use Spatie\Permission\Models\Role;

use App\Category;
use App\TypeService;
use App\Models\Business;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['roles.fields'], function ($view) {
            $permissionItems = Permission::pluck('name','id')->toArray();
            $view->with('permissionItems', $permissionItems);
        });
        View::composer(['users.fields'], function ($view) {
            $roleItems = Role::pluck('name','name')->toArray();
            $view->with('roleItems', $roleItems);
        });
        View::composer(['businesses.fields'], function ($view) {
            $categoryItems = Category::pluck('category_name','id')->toArray();
            $view->with('categoryItems', $categoryItems);
        });
        View::composer(['businesses.fields'], function ($view) {
            $type_serviceItems = TypeService::pluck('service_type','id')->toArray();
            $view->with('type_serviceItems', $type_serviceItems);
        });
        //pasa los datos de productos a welcome
        View::composer(['welcome'], function($view){
            $bussiness = Business::all();
            $view->with('bussiness', $bussiness);
        });

        //pasa los datos de categorías
        View::composer(['categorias'], function($view){
            $category = Category::all();
            $view->with('bussiness', $category);
        });




    }
}