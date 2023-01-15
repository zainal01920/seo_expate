@extends('layouts.fullpage')
@section('title',"Log In | SEO Content")
@section('content')
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


    <main class="section-login">
      <section class="section-login--logo">
        <a href="{{ route('home') }}">
          <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid" />
        </a>
      </section>

      <section class="section-login--form">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-5">
              <div class="card">
                <div class="card-title">Sign In</div>
                <div class="card-body">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mt-3">
                      <label for="" class="form-label">Email</label>
                      <input
                      type="email" class="form-control u-box-shadow-1" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus
                      />
                    </div>
                    <div class="mt-3">
                      <label for="" class="form-label">Password</label>
                      <input
                        id="password"
                        class="form-control u-box-shadow-1"
                        type="password"
                        name="password"
                        required autocomplete="current-password"
                      />
                    </div>
                    <div class="mt-5">
                      
                        <button type="submit" class="btn btn-green">{{ __('Sign In') }}</button>
                    
                     
                    </div>
                  </form>
                  <div class="links">
                    <p>
                      <a href="{{ route('register') }}">Need an account?</a>
                      <a href="{{ route('password.request') }}">Forgot Password?</a>
                    </p>
                  </div>
                  <div class="back-button">
                    <a href="{{ route('home') }}">
                      <i class="bi bi-arrow-left-circle"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    @endsection


