<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;
use Str;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(Request $request){    
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $inputs = $request->all();
        if(!empty($inputs)){
            $users = new User;
            $users->name = isset($inputs['name']) ? $inputs['name'] : '';
            $users->email = isset($inputs['email']) ? $inputs['email'] : '';
            $users->added_by = Auth::user()->email;
            $users->password = isset($inputs['password']) ? Hash::make($inputs['password']) : '';
            if($users->save()){
                return redirect()->route('profile');
            // $credentials = $request->only('email', 'password');
            //     if(Auth::attempt($credentials)) {
            //         return redirect()->intended('/');
            //     }  
            }
        }
    }

    public function update(Request $request, $id){    
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $inputs = $request->all();
        if(!empty($inputs)){
            $users = User::findOrFail($id);
            $users->name = isset($inputs['name']) ? $inputs['name'] : '';
            // $users->email = isset($inputs['email']) ? $inputs['email'] : '';
            $users->added_by = Auth::user()->email;
            $users->password = isset($inputs['password']) ? Hash::make($inputs['password']) : '';
            if($users->save()){
                return redirect()->route('profile');
            // $credentials = $request->only('email', 'password');
            //     if(Auth::attempt($credentials)) {
            //         return redirect()->intended('/');
            //     }  
            }   
        }
    }

    public function profile(){
        $admins = User::all();
        return view('profile', compact('admins'));
    }
}
