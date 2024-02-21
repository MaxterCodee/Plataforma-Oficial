<x-guest-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4"> <!-- Reducido a col-md-4 para hacerlo más angosto -->
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <x-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember_me" />
                                <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
                            </div>

                            <div class="d-flex justify-content-end">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <button type="submit" class="btn btn-primary ms-4">
                                    {{ __('Log in') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
