<?php

namespace App\Http\Controllers;

use App\Models\PersonHistory;
use Illuminate\Http\Request;

use App\Models\Mohstaff;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Validator;
use Auth;

class PersonHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function history()
    {
        return view('mohstaff.history');
    }
    function storeHistory(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'date'=>'required',
            'nic'=>'required',
            'vaccine_product'=>'required',
            'batch_number'=>'required',
            'vaccination_status'=>'required',
        ]);
        if($validator->fails()){
            return back();
        }
        else{
            $user=new PersonHistory([
                'date'=>$request->get('date'),
                'nic'=>$request->get('nic'),
                'vaccine_product'=>$request->get('vaccine_product'),
                'batch_number'=>$request->get('batch_number'),
                'vaccination_status'=>$request->get('vaccination_status'),
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
     * @param  \App\Models\PersonHistory  $personHistory
     * @return \Illuminate\Http\Response
     */
    public function show(PersonHistory $personHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonHistory  $personHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonHistory $personHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonHistory  $personHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonHistory $personHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonHistory  $personHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonHistory $personHistory)
    {
        //
    }
}
