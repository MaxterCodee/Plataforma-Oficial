@extends('layouts.main')

@section('content') 

    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="">
            <label for="email" class="mb-2">{{ __('Correo') }}</label>
    
            <div class="">
                <input id="email" type="email" class="form-control border border-black @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="">
            <label for="password" class="mt-3">{{ __('Contraseña') }}</label>
    
            <div class="">
                <input id="password" type="password" class="form-control border border-black @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    
        <div class="">
            @if (Route::has('password.request'))
                <a class="btn btn-link mt-3" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif
            <br>
            <button type="submit" class="btn btn-primary mt-2">
                {{ __('Acceder') }}
            </button>
        </div>
    </form>

@endsection

