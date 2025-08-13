<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\SendOtpJob;
use App\Models\OtpCode;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OtpController extends Controller
{
         public function sendOtp($mobile)
         {
             SendOtpJob::dispatch($mobile);
             return view('auth.otp', ['mobile' => $mobile]);
         }

         public function verifyOtp(Request $request)
         {
            //  if ($request->isMethod('get')) {
            //      return redirect()->route('login');
            //  }

            $request->validate([
                'mobile' => 'required|string|regex:/^09[0-9]{9}$/',
                'code' => 'required|string|digits:6', 
            ]);
             $mobile = $request->mobile;
             $otp = OtpCode::where('mobile', $mobile)
                           ->where('code', $request->code)
                           ->where('expires_at', '>', now())
                           ->first();
            
        //    $user = User::where('mobile', $mobile)->first();
            
        //     if ($user) {
        //         Auth::login($user);
        //        return redirect()->route('dashboard');
        //     }
             if ($otp) {
                 $otp->delete();
                 return view('auth.register', ['mobile' => $mobile]);
             }

             return back()->withErrors(['code' => 'کد OTP اشتباه یا منقضی شده است']);
         }
}
