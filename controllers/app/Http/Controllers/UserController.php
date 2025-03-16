<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $user = new User;
        $user->name = 'John Doe';
        $user->email = 'john@gmail.com';
        $user->password = 'password';
        $user->age = 30;
        $user->address = '123 Main St';
        $user->zip_code = '12345';
        $user->save();

        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@gmail.com',
            'password' => 'password',
            'age' => 25,
            'address' => '456 Main St',
            'zip_code' => '54321',
        ]);

        User::create([
            'name' => 'John Smith',
            'email' => 'smith@gmail.com',
            'password' => 'password',
            'age' => 35,
            'address' => '789 Main St',
            'zip_code' => '67890',
        ]);


        return redirect()->route('user.index');
    }
}