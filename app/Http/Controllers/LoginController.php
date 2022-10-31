<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Mohstaff;
use App\Models\People;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Validator;
use Auth;

class LoginController extends Controller
{
    //
    function index()
    {
        return view('login');
    }
    function checklogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|alphaNum|min:5'
        ]);
        $user_data = array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
        );

        $moh = Mohstaff::where('email', '=', $request->get('email'))->first();
       
        $people = People::where('uname','=',$request->get('email'))->first();

        if(Auth::attempt($user_data))
        {
            return view('admin.dashboard');
        }
        
        if($moh != null)
        {
            if(Hash::check($user_data['password'],$moh->password))
            {
                return view('mohstaff.dashboard', compact('moh'));
            }
            else{
                return back()->with('message','wrong Email address or Password');
            }           
        }

        if($people != null)
        {
            if(Hash::check($user_data['password'],$people->password))
            {
                //$people = People::all();
                return view('people.dashboard',compact('people'));
            }
            else{
                return back()->with('message','wrong Email address or Password');
            }
            
        }
        else{
            return back()->with('message','wrong Email address or Password');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
