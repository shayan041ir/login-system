<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
       public function register(Request $request)
       {
            $request->validate([
                'mobile' => 'required|string|regex:/^09[0-9]{9}$/',
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'national_code' => 'required|string|digits:10', 
                'password' => 'required|string|min:4|confirmed',
                // 'password' => 'required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', pasandidam
            ]);            
            $user = User::create([
               'mobile' => $request->mobile,
               'password' => Hash::make($request->password),
               'first_name' => $request->first_name,
               'last_name' => $request->last_name,
               'national_code' => $request->national_code,
           ]);

           Auth::login($user);
           return redirect()->route('dashboard');
       }
}
