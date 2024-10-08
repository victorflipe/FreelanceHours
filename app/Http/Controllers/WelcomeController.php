<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        // $user = User::find(1);
        $user = User::query()->create([
            'name' => 'Victor',
            'email' => 'victorf@gmail.com',
            'password' => 'victor'
        ]);


        var_dump($user);die();
        return view('welcome');
    }
}
