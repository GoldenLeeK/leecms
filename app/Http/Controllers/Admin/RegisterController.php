<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::ADMIN_HOME;

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
        ]);

    }

    protected function create(array $data)
    {
        return Admin::create([
            'name'     => $data['name'],
            'email'    => $data['mail'],
            'password' => Hash::make($data['password']),
        ]);

    }


}
