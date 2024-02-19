<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="grid grid-cols-2 gap-4">
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nombre')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Last Name 1 -->
            <div>
                <x-input-label for="last_name_1" :value="__('Apellido Materno')" />
                <x-text-input id="last_name_1" class="block mt-1 w-full" type="text" name="last_name_1" :value="old('last_name_1')" required autocomplete="last_name_1" />
                <x-input-error :messages="$errors->get('last_name_1')" class="mt-2" />
            </div>

            <!-- Last Name 2 -->
            <div>
                <x-input-label for="last_name_2" :value="__('Apellido Paterno')" />
                <x-text-input id="last_name_2" class="block mt-1 w-full" type="text" name="last_name_2" :value="old('last_name_2')" required autocomplete="last_name_2" />
                <x-input-error :messages="$errors->get('last_name_2')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Correo Electrónico')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Status -->

            <!-- Gender ID -->
            <div>
                <x-input-label for="gender_id" :value="__('Género')" />
                <select id="gender_id" name="gender_id" class="form-select form-control border border-gray-300 rounded-lg" required>
                    <option selected>Seleccionar género</option>
                    @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                    @endforeach

                  </select>
                <x-input-error :messages="$errors->get('gender_id')" class="mt-2" />
            </div>

            <!-- Matricula -->
            <div>
                <x-input-label for="matricula" :value="__('Matrícula')" />
                <x-text-input id="matricula" class="block mt-1 w-full" type="text" name="matricula" :value="old('matricula')" required autocomplete="matricula" />
                <x-input-error :messages="$errors->get('matricula')" class="mt-2" />
            </div>

            <!-- Career ID -->
            <div>
                <x-input-label for="gender_id" :value="__('Carrera')" />
                <select id="career_id" name="career_id" class="form-select form-control border border-gray-300 rounded-lg" style="width: 192px;" required>
                    <option selected>Seleccionar carrera</option>
                    @foreach ($careers as $career)
                        <option value="{{ $career->id }}">{{ $career->name }}</option>
                    @endforeach

                  </select>
                <x-input-error :messages="$errors->get('gender_id')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Contraseña')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>
        <x-text-input id="status" class="block mt-1 w-full invisible" type="text" name="status" :value="1" required autocomplete="status" />


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
