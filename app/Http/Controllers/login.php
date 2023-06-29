<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class login extends Controller
{
    public function register (){
        return view('register.register');
    }


    public function registerAuht(Request $request){
      
          $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'min:4|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:4'

        ]);
          //return  gettype( $request->file('avatar') );

        if(  gettype( $request->file('avatar')) == "NULL"){
            $data = User::create([
                'name'=> $request->name,
                'email' => $request->email,
                'password' => Hash::make(  $request->password),   
            ]);
        }else{
            $data = User::create([
                'name'=> $request->name,
                'email' => $request->email,
                'password' => Hash::make(  $request->password),
                'avatar' => $avatar = $request->file('avatar')->store('public')
            ]);     
        }
       
        $data->save();

        Auth::login($data);
        return redirect(route('post.index'));
    }

     public function login()
    {
        return view('register.login');
    }

    public function  auht(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credenciales = request()->only('email' , 'password');
        if(Auth::attempt($credenciales)){
            request()->session()->regenerate();
            return redirect('inicio');
        }
        return redirect('login')->with('login' , 'datos incorrectos');
    }
}
