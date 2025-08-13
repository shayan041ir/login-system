@extends('layouts.app')

     @section('title', 'تأیید کد OTP')

     @section('content')
         <h1>تأیید کد OTP</h1>
         <form method="POST" action="{{ route('verify-otp') }}">
             @csrf
             <input type="hidden" name="mobile" value="{{ $mobile }}">
             <label>کد OTP:</label>
             <input type="text" name="code" required>
             @error('code')
                 <p class="error">{{ $message }}</p>
             @enderror
             <button type="submit">تأیید</button>
         </form>
     @endsection