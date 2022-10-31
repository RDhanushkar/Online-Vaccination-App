<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

use App\Models\Mohstaff;
use App\Models\User;
use App\Models\Annocement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Validator;
use Auth;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createPeople()
    {
        $mohs=Mohstaff::all();
        return view('peopleregister',compact('mohs'));
    }

    public function storePeople(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'fstname'=>'required',
            'lstname'=>'required',
            'address'=>'required',
            'mobilenumber'=>'required',
            'gender'=>'required',
            'nic'=>'required',
            'dob'=>'required',
            'district'=>'required',
            'moh'=>'required',
            'uname'=>'required',
            'password'=>'required',
        ]);
        if($validator->fails()){
            return back();
        }
        else{
            $user=new People([
                'fstname'=>$request->get('fstname'),
                'lstname'=>$request->get('lstname'),
                'address'=>$request->get('address'),
                'mobilenumber'=>$request->get('mobilenumber'),
                'gender'=>$request->get('gender'),
                'nic'=>$request->get('nic'),
                'dob'=>$request->get('dob'),
                'district'=>$request->get('district'),
                'moh'=>$request->get('moh'),
                'uname'=>$request->get('uname'),
                'password'=>Hash::make($request->get('password')),
            ]);
            $user->save();
            return view('login');
        }
    }
    function smart(People $people)
    {
        return view('people.smartvaccine',compact('people'));
    }
    
    function detail(People $people)
    {
        //$people = People::all();
        $history = DB::table('person_histories')
        ->join('people','people.nic','=','person_histories.nic')
        ->where('people.id','=',$people->id)
        ->get();
        return view('people.detail',compact('people','history'));
    }
    function anno(People $people)
    {
        $annocement = Annocement::all();
        return view('people.annocement',compact('people','annocement'));
    }
    
    

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        //
    }
}
