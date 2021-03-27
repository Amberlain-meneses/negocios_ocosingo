<?php

namespace App\Http\Controllers;

use App\Mail\MailRequestCategoryRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMailRegisterCategory(Request $request){

        $user = Auth::user()->email ;
        $category_name = $request->input('category_name');
        Mail::to(env('MAIL_TO_ADMIN'))->send(new MailRequestCategoryRegister($user, $category_name));
        return response()->json(['status' => 200]);
    }
}
