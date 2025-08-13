<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
       public function showDashboard()
       {
           return view('dashboard');
       }

       public function logout()
       {
           Auth::logout();
           return redirect()->route('home');
       }
}
