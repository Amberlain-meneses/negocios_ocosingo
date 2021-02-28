<?php

namespace App\Observers;

use App\Models\Business;
use Illuminate\Support\Facades\Auth;

class BusinessObserver
{
    /**
     * Handle the business "created" event.
     *
     * @param  \App\Business  $business
     * @return void
     */
    public function created(Business $business)
    {
        $this->isVerified($business);
    }

    /**
     * Handle the business "updated" event.
     *
     * @param  \App\Business  $business
     * @return void
     */
    public function updated(Business $business)
    {
        $this->isVerified($business);
    }

    /**
     * Handle the business "deleted" event.
     *
     * @param  \App\Business  $business
     * @return void
     */
    public function deleted(Business $business)
    {
        //
    }

    /**
     * Handle the business "restored" event.
     *
     * @param  \App\Business  $business
     * @return void
     */
    public function restored(Business $business)
    {
        //
    }

    /**
     * Handle the business "force deleted" event.
     *
     * @param  \App\Business  $business
     * @return void
     */
    public function forceDeleted(Business $business)
    {
        //
    }

    public function isVerified($business){
        //Se verifica si existe un usuario logueado
        if(Auth::check()){
            Auth::user()->hasRole('superAdmin') ? $business->is_verified = 1 : $business->is_verified = 0;
            $business->save();
        }
    }
}
