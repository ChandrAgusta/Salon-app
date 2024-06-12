<?php

namespace App\Http\Controllers;

use App\Models\Cust;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    
    public function register(Request $request){
        $cradential = $request->validate([
            'nama' => 'required',
            'nomor' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'password' => 'required',
            'rpPassword' => 'required',
        ]);

        if ($request->password == $request->rpPassword) {
            $result = Cust::register(
                $request->input('nama'),
                $request->input('nomor'),
                $request->input('email'),
                $request->input('alamat'),
                $request->input('password')
            );

            if($result['status'] == 'success'){
                return redirect()->route('login');
            }else{
                return redirect()->back()->withErrors($cradential)->withInput();
            }
        }else {
            return redirect()->back()->withErrors($cradential)->withInput();
        }
    }

    public function login(Request $request){
        $cradentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($cradentials)) {
            return redirect()->route('cust_menu');
        } elseif (Auth::guard('admin')->attempt($cradentials)) {            
            return redirect()->route('admin_menu');        
        } else {
            return redirect()->back()->withErrors("email atau password salah")->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}