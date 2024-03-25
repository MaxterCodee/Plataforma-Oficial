<x-guest-layout>
    
    <div class="container"> 
        <div class="row justify-content-center">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="container">
                        <div class="row g-3 mb-4">
                            <!-- Name -->
                            <div class="col-md-6">
                                <label for="name" class="form-label">{{ __('Nombre') }}</label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                                @error('name')
                                    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
                                @enderror
                            </div>
            
                            <!-- Last Name 1 -->
                            <div class="col-md-6">
                                <label for="last_name_1" class="form-label">{{ __('Apellido Paterno') }}</label>
                                <input id="last_name_1" class="form-control" type="text" name="last_name_1"  required autocomplete="last_name_2" />
                                @error('last_name_2')
                                    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <!-- Last Name 2 -->
                            <div class="col-md-6">
                                <label for="last_name_2" class="form-label">{{ __('Apellido Materno') }}</label>
                                <input id="last_name_2" class="form-control" type="text" name="last_name_2" value="{{ old('last_name_1') }}" required autofocus autocomplete="name" />
            
                                @error('last_name_1')
                                    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
                                @enderror
                            </div>
            
            
                            <!-- Email Address -->
                            <div class="col-md-6">
                                <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                                <input id="email" class="form-control" type="email" name="email"  required autocomplete="username" />
                                @error('email')
                                    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
                                @enderror
                            </div>
            
                            <!-- Gender ID -->
                            <div class="col-md-6">
                                <label for="gender_id" class="form-label">{{ __('Género') }}</label>
                                <select id="gender_id" name="gender_id" class="form-select" required>
                                    <option selected>Seleccionar género</option>
                                    @foreach ($genders as $gender)
                                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                    @endforeach
                                </select>
                                @error('gender_id')
                                    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
                                @enderror
                            </div>
            
                            <!-- Matricula -->
                            <div class="col-md-6">
                                <label for="matricula" class="form-label">{{ __('Matrícula') }}</label>
                                <input id="matricula" class="form-control" type="text" name="matricula" required autocomplete="matricula" />
                                @error('matricula')
                                    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
                                @enderror
                            </div>
            
                            <!-- Career ID -->
                            <div class="col-md-6">
                                <label for="career_id" class="form-label">{{ __('Carrera') }}</label>
                                <select id="career_id" name="career_id" class="form-select"  required>
                                    <option selected>Seleccionar carrera</option>
                                    @foreach ($careers as $career)
                                        <option value="{{ $career->id }}">{{ $career->name }}</option>
                                    @endforeach
                                </select>
                                @error('career_id')
                                    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <input id="status" class="form-control invisible" type="text" name="status" value="1" required autocomplete="status" />
                            </div>
                        </div>

                        <div class="row g-3">
                            <!-- Password -->
                            <div class="col-md-6">
                                <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                @error('career_id')
                                    <p {{ $password->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
                                @enderror
                            </div>
            
                            <!-- Confirm Password -->
                            <div class="col-md-6">
                                <label for="password_confirmation" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                @error('password_confirmation')
                                    <p {{ $password->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
            
            
                        <div class="col-12 mt-5">
                            <a class="text-decoration-none " href="{{ route('login') }}">{{ __('Already registered?') }}</a>
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-guest-layout>
