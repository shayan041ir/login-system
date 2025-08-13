@extends('layouts.app')

   @section('title', 'پنل کاربر')

   @section('content')
       <h1>خوش آمدید، {{ auth()->user()->first_name }}</h1>
       <p>شماره موبایل: {{ auth()->user()->mobile }}</p>
       <form method="POST" action="{{ route('logout') }}">
           @csrf
           <button type="submit">خروج</button>
       </form>
   @endsection