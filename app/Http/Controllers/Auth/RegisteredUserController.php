<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\User;
use App\Models\Career;
use App\Models\Student;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $genders = Gender::all();
        $careers = Career::all();
        return view('auth.register', compact('genders', 'careers'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name_1' => ['required', 'string', 'max:255'], // Add 'last_name' field to the validation rules
            'last_name_2' => ['required', 'string', 'max:255'], // Add 'last_name' field to the validation rules
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'status' => ['required', 'integer', 'min:0', 'max:1'],
            'gender_id' => ['required', 'integer'],
            'career_id' => ['required', 'integer'],
            'matricula' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'last_name_1' => $request->last_name_1, // Add 'last_name' field to the user creation
            'last_name_2' => $request->last_name_2, // Add 'last_name' field to the user creation
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => $request->status,
            'gender_id' => $request->gender_id,

        ]);

        $student = Student::create([
            'user_id' => $user->id,
            'career_id' => $request->career_id,
            'matricula' => $request->matricula,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
