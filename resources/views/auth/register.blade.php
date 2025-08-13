@extends('layouts.app')

     @section('title', 'ثبت اطلاعات')

     @section('content')
         <h1>ثبت اطلاعات</h1>
         <form method="POST" action="{{ route('register') }}">
             @csrf
             <input type="hidden" name="mobile" value="{{ $mobile }}">
             <label>نام:</label>
             <input type="text" name="first_name" required>
             @error('first_name')
                 <p class="error">{{ $message }}</p>
             @enderror
             <br>
             <label>نام خانوادگی:</label>
             <input type="text" name="last_name" required>
             @error('last_name')
                 <p class="error">{{ $message }}</p>
             @enderror
             <br>
             <label>کد ملی:</label>
             <input type="text" name="national_code" required>
             @error('national_code')
                 <p class="error">{{ $message }}</p>
             @enderror
             <br>
             <label>کلمه عبور:</label>
             <input type="password" name="password" required>
             @error('password')
                 <p class="error">{{ $message }}</p>
             @enderror
             <br>
             <label>تکرار کلمه عبور:</label>
             <input type="password" name="password_confirmation" required>
             @error('password_confirmation')
                 <p class="error">{{ $message }}</p>
             @enderror
             <br>
             <button type="submit">ثبت</button>
         </form>
     @endsection