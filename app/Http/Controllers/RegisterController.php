<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Manager;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request){
        $manager = Manager::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email
        ]);
        
        $user = User::create(array_merge($request->except('photo', 'password', 'password_confirmation'), ['manager_id' => $manager->id, 'password' => bcrypt($request->password)]));
        
    	return $user;
    }
}



