@extends('layouts.app')

   @section('title', 'ورود')

   @section('content')
       <h1>ورود</h1>
       <form method="POST" action="{{ route('check-mobile') }}">
           @csrf
           <label>شماره موبایل:</label>
           <input type="text" name="mobile" required>
           @error('mobile')
               <p class="error">{{ $message }}</p>
           @enderror
           <button type="submit">ارسال</button>
       </form>
   @endsection