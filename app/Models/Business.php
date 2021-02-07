<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Business
 * @package App\Models
 * @version February 7, 2021, 6:32 pm UTC
 *
 * @property string $name
 * @property string $image
 * @property string $adress
 * @property string $location
 * @property string $schedule
 * @property string $phone
 * @property integer $service_id
 * @property integer $category_id
 * @property string $references
 * @property string $owner
 */
class Business extends Model
{
    use SoftDeletes;

    public $table = 'business';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'image',
        'adress',
        'location',
        'schedule',
        'phone',
        'service_id',
        'category_id',
        'references',
        'owner'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'image' => 'string',
        'adress' => 'string',
        'location' => 'string',
        'schedule' => 'string',
        'phone' => 'string',
        'service_id' => 'integer',
        'category_id' => 'integer',
        'references' => 'string',
        'owner' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|100',
        'image' => 'required|string|100',
        'adress' => 'required|string|100',
        'location' => 'required|string|100',
        'schedule' => 'required|string|100',
        'phone' => 'max:10|min:10',
        'service_id' => 'required',
        'category_id' => 'required',
        'references' => 'required',
        'owner' => 'required'
    ];

    
}
