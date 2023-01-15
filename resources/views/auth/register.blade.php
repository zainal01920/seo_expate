@extends('layouts.fullpage')
@section('title',"Sign Up | SEO Content")
@section('content')
{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

<main class="section-register">
    <section class="section-register--left">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title">Benefits of joining:</h1>
          <ul class="card-text">
            <li>Over 6,000 Proven Writers</li>
            <li>Powerful Content Creation Tools</li>
            <li>Easy-to-Use Platform</li>
            <li>Fast Turnaround</li>
            <li>Pay as You Go</li>
            <li>Quality Guaranteed!</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="section-register--right">
      <h2 class="heading mb-5">Create Your Free Account</h2>
      <p class="heading--sub mb-4 d-inline">
        High-quality content written on demand by the
        <span class="green"> web's best writers. </span>
      </p>
      <p>
        Sign up is easy and free. You don't pay anything until you're ready to
        order content.
      </p>

      <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mt-3">
          <label for="" class="form-label">First Name</label>
          <input type="text" class="form-control u-box-shadow-1" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required  autofocus />
        </div>
        <div class="mt-3">
          <label for="" class="form-label">Email</label>
          <input type="email" class="form-control u-box-shadow-1" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus />
        </div>
        <div class="mt-3">
          <label for="" class="form-label">Password</label>
          <input
            type="password"
            class="form-control u-box-shadow-1"
            name="password"
            id="password"
            required autocomplete="new-password"
          />
        </div>
        <div class="mt-3">
            <label for="" class="form-label">Confirm Password</label>
            <input
              type="password"
              class="form-control u-box-shadow-1"
              type="password"
              name="password_confirmation" required
              id="password_confirmation"
            />
          </div>
        <div class="mt-5">
          <button type="submit" class="btn btn-blue">Sign Up</button>
        </div>
      </form>
      <p class="privacy-links mt-5">
        I agree to the
        <a href="terms-conditions.html"> Terms & Conditions </a>
        and
        <a href="privacy-policy.html"> Privacy Policy. </a>
      </p>
      <p class="login-link mt-5">
        Already have an account?
        <a href="{{ route('login') }}"> Sign in </a>
      </p>
    </section>
  </main>
  @endsection