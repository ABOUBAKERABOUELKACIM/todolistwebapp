<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\UserLogin;

class RegisterController extends Controller
{
    public function index()
    {
        return view('test');
    }
    
    public function store(Request $request)
    {
        // Validate user input
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect('/test')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Create new user
        $user = UserLogin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Redirect to home page
        return redirect('/login');
    }
}
?>