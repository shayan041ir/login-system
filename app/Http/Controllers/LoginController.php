<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
      public function showLoginForm()
       {
           return view('auth.login');
       }

       public function checkMobile(Request $request)
       {
            if ($request->isMethod('GET')) {
                return redirect()->route('login')->withErrors(['password' => 'رمز عبور اشتباه است']);
            }
           $request->validate(['mobile' => 'required|string']);
           $mobile = convertPersianNumbersToEnglish($request->mobile);
           $user = User::where('mobile', $mobile)->first();

           if ($user) {
            //    return redirect()->route('otp.send', ['mobile' => $mobile]);
               return view('auth.password', ['mobile' => $mobile]);
           }

           return redirect()->route('otp.send', ['mobile' => $mobile]);
       }
    }
