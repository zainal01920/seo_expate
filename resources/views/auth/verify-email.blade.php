 @extends('layouts.fullpage')
@section('title',"Verify Email | SEO Content")
@section('content') 
 {{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>  --}}


 <main class="section-login"> 
    <section class="section-login--logo">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
          <a href="{{ route('home') }}" onclick="event.preventDefault(); this.closest('form').submit();">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid" />
          </a>
      </form>
    </section>

    <section class="section-login--form">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="card">
                <div class="card-title"> Verify your email </div>
               
              <div class="card-body">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </div>
        
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('verification.send') }}">
                  @csrf
                
                  <div class="mt-5">
                    
                      <button type="submit" class="btn btn-green">{{ __('Resend Verification Email') }}</button>
                  
                   
                  </div>
                </form>
                {{-- <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="d-grid mt-2">
                      <button type="submit" class="btn btn-danger btn-lg">
                          {{ __('Log Out') }}
                      </button>
                  </div>
                </form> --}}
               
                <div class="back-button">
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                      <a href="{{ route('home') }}"  onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="bi bi-arrow-left-circle"></i>
                      </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  @endsection 



