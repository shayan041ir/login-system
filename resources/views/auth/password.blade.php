@extends('layouts.app')

   @section('title', 'وارد کردن کلمه عبور')

   @section('content')
       <h1>وارد کردن کلمه عبور</h1>
       <form method="POST" action="{{ route('login-with-password') }}">
           @csrf
           <input type="hidden" name="mobile" value="{{ $mobile }}">
           <label>کلمه عبور:</label>
           <input type="password" name="password" required>
           @error('password')
               <p class="error">{{ $message }}</p>
           @enderror
           <button type="submit">ورود</button>  
       </form>
   @endsection