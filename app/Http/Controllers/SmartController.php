<?php

namespace App\Http\Controllers;

use App\Models\SmartVaccine;
use Illuminate\Http\Request;

use App\Models\People;
use App\Models\Mohstaff;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Validator;
use Auth;



class SmartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeSmart(Request $request, People $people)
    {
        $validator=Validator::make($request->all(),[
            'nic'=>'required',
            'fullname'=>'required',
            'age'=>'required',
            'email'=>'required',
            'doc'=>'required',
        ]);
        if($validator->fails()){
            return back();
        }
        else{
            $user=new SmartVaccine([
                'nic'=>$request->get('nic'),
                'fullname'=>$request->get('fullname'),
                'age'=>$request->get('age'),
                'email'=>$request->get('email'),
                'doc'=>$request->get('doc'),
            ]);
            $user->save();
            
            return view('people.dashboard',compact('people'));
        }
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
     * @param  \App\Models\SmartVaccine  $smartVaccine
     * @return \Illuminate\Http\Response
     */
    public function show(SmartVaccine $smartVaccine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SmartVaccine  $smartVaccine
     * @return \Illuminate\Http\Response
     */
    public function edit(SmartVaccine $smartVaccine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SmartVaccine  $smartVaccine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SmartVaccine $smartVaccine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SmartVaccine  $smartVaccine
     * @return \Illuminate\Http\Response
     */
    public function destroy(SmartVaccine $smartVaccine)
    {
        //
    }
}
