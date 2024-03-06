@extends('layouts.guest')


@section('content')
<div class="container"> 
    <div class="row justify-content-center">
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                {{-- Name --}}
                <div class="row mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- Last name 1 --}}
                <div class="row mb-3">
                    <label for="last_name_1" class="col-md-4 col-form-label text-md-end">{{ __('Last Name 1') }}</label>

                    <div class="col-md-6">
                        <input id="last_name_1" type="text" class="form-control" name="last_name_1" :value="{{ old('last_name_1') }}" required autocomplete="last_name_1" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- Last name 2 --}}
                <div class="row mb-3">
                    <label for="last_name_2" class="col-md-4 col-form-label text-md-end">{{ __('Last Name 2') }}</label>

                    <div class="col-md-6">
                        <input id="last_name_2" type="text" class="form-control" name="last_name_2" :value="{{ old('last_name_2') }}" required autocomplete="last_name_2" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- Email --}}
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" :value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- Genders --}}
                <div class="row mb-3">
                    <label for="gender_id" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                    <div class="col-md-6">
                        <select id="gender_id"  class="form-select form-control border border-gray-300 rounded-lg" name="gender_id" :value="{{ old('gender_id') }}" required>
                            <option selected>{{__('Select Gender')}}</option>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Student Code (Matricula)--}}
                <div class="row mb-3">
                    <label for="matricula" class="col-md-4 col-form-label text-md-end">{{ __('Student Code') }}</label>

                    <div class="col-md-6">
                        <input id="matricula" type="text" class="form-control " name="matricula" :value="{{ old('matricula') }}" required autocomplete="matricula">

                        @error('matricula')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- Career ID --}}
                <div class="row mb-3">
                    <label for="career_id" class="col-md-4 col-form-label text-md-end">{{ __('Career') }}</label>

                    <div class="col-md-6">
                        <select id="career_id"  class="form-select form-control border border-gray-300 rounded-lg" name="career_id" :value="{{ old('career_id') }}" required>
                            <option selected>{{__('Select Career')}}</option>
                            @foreach ($careers as $career)
                                <option value="{{ $career->id }}">{{ $career->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Password --}}
                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                {{-- Confirm Password --}}
                <div class="row mb-3">
                    <label for="password-confirmation" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <a class="btn btn-link" href="{{url('/')}}">
                    {{__('Inicia sesion')}}
                </a>

                <br>

                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
                
            </form>
        </div>
    </div>
</div>
@endsection
