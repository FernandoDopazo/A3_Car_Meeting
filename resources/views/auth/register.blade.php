@extends('layouts.master')

@section('title', 'Autos Encontros')

@section('content')

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <style>

            * {
                font-family: "poppins", sans-serif;
            }

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
        padding-top: 110px;
        align-items: center;
        text-align: center;

    }
        </style>

        <!-- Name -->
        <div class="login">
            <h1>Cadastre-se</h1>
            <div>
                <x-input-label for="name" :value="__('Nome')" />
                <br>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <br>
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <br>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
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
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <br>
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirme a Senha')" />
                <br>
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <br>
            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="btn btn-primary">
                    {{ __('Cadastrar') }}
                </x-primary-button>
        <br><br>
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
            {{ __('Ja tem uma conta?') }}
        </a>

            </div>
        </div>
    </form>

    @endsection
