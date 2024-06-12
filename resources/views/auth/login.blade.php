@extends('layouts.master')

@section('title', 'Autos Encontros')

@section('content')

    <style>

    body,html {
    width: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    }



    .login {
        display: flex;
        flex: 1;     
        flex-direction: column;
        padding: 20px;
        align-items: center;
        text-align: center;
        border: 2px solid black;
        border-radius: 10%;
        box-shadow: 10px 10px 10px 5px
    }

    form{
        display: flex;
        flex: 1;     
        flex-direction: column;
        padding-top: 120px;
        align-items: center;
        text-align: center;
        
    }
    </style>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
       
       <div class="login">
        <h1>Login</h1>
        <br>
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <br>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <br>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Senha')" />
                <br>
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <br>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
            <br>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Esqueci minha senha') }}
                    </a>
                @endif
                    <br><br>
                <x-primary-button style="border: 1px solid black;width:100px;cursor:pointer">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </div>
    </form>

    @endsection