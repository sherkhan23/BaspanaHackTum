@extends('layouts.app')

@section('title') Login @endsection

@section('content')
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

            <h1 class="text-3xl font-medium">Вход</h1>

            <form method="POST" action="{{ route("login_process") }}" class="space-y-5 mt-5">
                @csrf

                <input name="email" type="text" class="w-full h-12 border border-gray-800 rounded px-3 " placeholder="Email" />

                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="password" type="password" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Пароль" />

                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <div>
                    <a href="" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Забыли пароль?</a>
                </div>

                <div>
                    <a href="{{ route("register") }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">Регистрация</a>
                </div>

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Войти</button>
            </form>
                                </div>
            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://static.tildacdn.com/tild3439-6435-4330-b032-626332373636/photo.png" class="img-fluid" alt="Sample image">

            </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
