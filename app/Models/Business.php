<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;
use App\TypeService;
use App\User;

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
        'is_verified',
        'user_id',
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
        'is_verified' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [








        
        'name' => 'required|string|max:100',
        'image' => 'required',
        'adress' => 'required|string|max:100',
        'location' => 'required|string|max:100',
        'schedule' => 'required|string|max:100',
        'phone' => 'max:10|min:10',
        'service_id' => 'required',
        'category_id' => 'required',
        'references' => 'required',
        'user_id' => 'required',
    ];

    public function category(){

        return $this->hasOne(Category::class,'id','category_id');
    }

    public function service(){
        
        return $this->hasOne(TypeService::class,'id','service_id');
    }

    //relacionar que un negocio pertenece a una categoría
    /*public function categoria(){
        
        return $this->belongsTo(Category::class, 'id', 'category_id');
    }*/
}
