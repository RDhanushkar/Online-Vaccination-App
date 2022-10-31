<?php

namespace App\Http\Controllers;

use App\Models\Annocement;
use Illuminate\Http\Request;

use App\Models\People;
use App\Models\SmartVaccine;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Validator;
use Auth;

class AnnocementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function annoncement()
    {
        return view('mohstaff.annocement');
    }
    function storeAnno(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'date'=>'required',
            'vaccine'=>'required',
            'venue'=>'required',
            'age_group'=>'required',
            'no_of_dosage'=>'required',
        ]);
        if($validator->fails()){
            return back();
        }
        else{
            $user=new Annocement([
                'date'=>$request->get('date'),
                'vaccine'=>$request->get('vaccine'),
                'venue'=>$request->get('venue'),
                'age_group'=>$request->get('age_group'),
                'no_of_dosage'=>$request->get('no_of_dosage'),
            ]);
            $user->save();
            return view('mohstaff.dashboard');
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
     * @param  \App\Models\Annocement  $annocement
     * @return \Illuminate\Http\Response
     */
    public function show(Annocement $annocement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Annocement  $annocement
     * @return \Illuminate\Http\Response
     */
    public function edit(Annocement $annocement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annocement  $annocement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Annocement $annocement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annocement  $annocement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annocement $annocement)
    {
        //
    }
}
