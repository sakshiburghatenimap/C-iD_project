<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;

class UserauthController extends Controller
{
    public function index()
    {
        return view('users.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('users.signup');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'user_role' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone_number' => 'required',
            'country' => 'required',
            'VAT_number' => 'required',
            'company_name' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'street_name' => 'required',
            'street_number' => 'required',        
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'user_role' => $data['user_role'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'phone_number' => $data['phone_number'],
        'country' => $data['country'],
        'VAT_number' => $data['VAT_number'],
        'company_name' => $data['company_name'],
        'zip_code' => $data['zip_code'],
        'city' => $data['city'],
        'street_name' => $data['street_name'],
        'street_number' => $data['street_number'],
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

     public function myprofile(){
        return view('users.myprofile');
     }
}
