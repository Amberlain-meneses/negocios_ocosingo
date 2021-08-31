<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
    use SoftDeletes;
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_name', 
        'is_verified',
        'image'
    ];

    //Reglas de validación
    public static $rules = [
        'category_name' => 'required',
    ];

    
}
