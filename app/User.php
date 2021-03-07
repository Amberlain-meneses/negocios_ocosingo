<?php

namespace App;

use App\Models\Business;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'default_url',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Reglas de usuario
    public static $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6',
        'phone' => 'min:10|max:10|nullable',
    ];

    //Reglas para modificar usuario sin modificar la contraseña
    public static $updateRules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'min:10|max:10|nullable',
    ];

    //Comienzan las relaciones
    public function business(){
        
        return $this->hasOne(Business::class);
    }
    //Fín relaciones

}
