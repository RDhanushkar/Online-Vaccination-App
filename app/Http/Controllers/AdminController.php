<?php

namespace App\Http\Controllers;


use App\Models\Mohstaff;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Validator;
use Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function createMoh()
    {
        return view('admin.createmohstaff');
    }
    public function storeMoh(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'mohid'=>'required',
            'email'=>'email',
            'district'=>'required',
            'mname'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'address'=>'required',
            'contactno'=>'required',
            'password'=>'required',
        ]);
        if($validator->fails()){
            return back();
        }
        else{
            $user=new Mohstaff([
                'mohid'=>$request->get('mohid'),
                'email'=>$request->get('email'),
                'district'=>$request->get('district'),
                'mname'=>$request->get('mname'),
                'fname'=>$request->get('fname'),
                'lname'=>$request->get('lname'),
                'address'=>$request->get('address'),
                'contactno'=>$request->get('contactno'),
                'password'=>Hash::make($request->get('password')),
            ]);
            $user->save();
            return view('admin.dashboard');
        }
    }
}
