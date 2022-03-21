<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function customLogin(Request $request) {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('shipment/index')->withSuccess('Signed in');
        }

        return redirect('login')->withSuccess('Login details are not valid');
    }

    public function registration() {
        return view('register');
    }

    public function customRegistration(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $newModel = new User;
        $newModel->name = $request->input('name');
        $newModel->email = $request->input('email');
        $newModel->password = Hash::make($request->input('password'));
        $newModel->role = 1;
        

        if ($request->hasFile('customFile')) {
            $request->validate([
                'customFile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $imageName = time().'.'.$request->customFile->extension();  
         
            $request->customFile->move(public_path('avatars'), $imageName);
            $newModel->avatar_path = $imageName;
        }

        $newModel->save();
        return redirect('shipment/index')->withSuccess('You have signed-in');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

}
