<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
       public function loginWithPassword(Request $request)
       {
            $request->validate([
                'mobile' => 'required|string|regex:/^09[0-9]{9}$/',
                'password' => 'required|string|min:4',
            ]);

           $mobile = $request->mobile;
           $user = User::where('mobile', $mobile)->first();

           if (Hash::check($request->password, $user->password)) {
               Auth::login($user);
               return redirect()->route('dashboard');
           }

                return redirect()->route('login')->withErrors(['password' => 'رمز عبور اشتباه است']);
       }
}
