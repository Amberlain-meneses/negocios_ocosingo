<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version February 13, 2021, 9:06 pm UTC
 *
 * @property string $name
 * @property number $price
 * @property string $description
 * @property string $slug
 */
class Product extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'price',
        'description',
        'slug',
        'business_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'price' => 'decimal:2',
        'description' => 'string',
        'slug' => 'string',
        'business_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'price' => 'required',
        'description' => 'required',
        'slug' => 'string'
    ];

    
}
