<?php

namespace App\Providers;

use Spatie\Permission\Models\Role;

use App\Category;
use App\TypeService;

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
        //
    }
}