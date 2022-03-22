<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\InvoiceId;
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
            'type' => 'required',
            'state' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state_code' => ['required', 'string', 'min:2', 'max:2'],
            'pincode' => ['required', 'string', 'min:6', 'max:6'],
            'fssai' => ['required', 'string'],
            'gst' => ['required', 'string'],
            'address' => ['required', 'string'],
            'password' => 'required',
        ]);
        $inputs = $request->all();
        if(!empty($inputs)){
            $users = new User;
            $users->name = isset($inputs['name']) ? $inputs['name'] : '';
            $users->type = isset($inputs['type']) ? $inputs['type'] : '';
            $users->email = isset($inputs['email']) ? $inputs['email'] : '';
            $users->state = isset($inputs['state']) ? $inputs['state'] : '';
            $users->city = isset($inputs['city']) ? $inputs['city'] : '';
            $users->state_code = isset($inputs['state_code']) ? $inputs['state_code'] : '';
            $users->pincode = isset($inputs['pincode']) ? $inputs['pincode'] : '';
            $users->fssai = isset($inputs['fssai']) ? $inputs['fssai'] : '';
            $users->gst = isset($inputs['gst']) ? $inputs['gst'] : '';
            $users->address = isset($inputs['address']) ? $inputs['address'] : '';

            $users->added_by = Auth::user()->email;
            $users->password = isset($inputs['password']) ? Hash::make($inputs['password']) : '';
            if($users->save()){
                $invoiceID = InvoiceId::create([
                    'invoice_id' => '1',
                    'user_id' => $users->id,
                ]);
                return redirect()->route('profile')->with('success', 'Admin Added Successfully');
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
            'type' => 'required',
            'state' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state_code' => ['required', 'string', 'min:2', 'max:2'],
            'pincode' => ['required', 'string', 'min:6', 'max:6'],
            'fssai' => ['required', 'string'],
            'gst' => ['required', 'string'],
            'address' => ['required', 'string'],
            // 'password' => 'required',
        ]);
        $inputs = $request->all();
        if(!empty($inputs)){
            $users = User::findOrFail($id);
            $users->name = isset($inputs['name']) ? $inputs['name'] : '';
            $users->type = isset($inputs['type']) ? $inputs['type'] : '';
            $users->email = isset($inputs['email']) ? $inputs['email'] : '';
            $users->state = isset($inputs['state']) ? $inputs['state'] : '';
            $users->city = isset($inputs['city']) ? $inputs['city'] : '';
            $users->state_code = isset($inputs['state_code']) ? $inputs['state_code'] : '';
            $users->pincode = isset($inputs['pincode']) ? $inputs['pincode'] : '';
            $users->fssai = isset($inputs['fssai']) ? $inputs['fssai'] : '';
            $users->gst = isset($inputs['gst']) ? $inputs['gst'] : '';
            $users->address = isset($inputs['address']) ? $inputs['address'] : '';

            $users->added_by = Auth::user()->email;
            if($request->password != ''){
                $users->password = isset($inputs['password']) ? Hash::make($inputs['password']) : '';
            }
            if($users->save()){
                return redirect()->route('profile')->with('success', 'Admin Updated Successfully');
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
