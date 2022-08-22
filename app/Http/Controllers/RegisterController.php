<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        // валидируем данные из формы
        $request->validate([
            'name' => ['required', 'string', 'max:15'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'max:255'],
        ]);
        // формируем нового пользователя
        $user = User::create([
            'name' => $request->input('name'),
            'email' =>  $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
        // аутентификация нового пользователя
        $request->session()->flash('user_registration_success', 'Вы успешно зарегистрированы!');
        // отправляем письмо для подтверждения email на почту
        event(new Registered($user));
        // кидаем на главную страницу
        return redirect()->route('home');
    }
}
