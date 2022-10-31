<?php

namespace App\Http\Controllers;

use App\Models\Mohstaff;
use Illuminate\Http\Request;

use App\Models\People;
use App\Models\SmartVaccine;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Validator;
use Auth;

class MohstaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function smart()
    {
        $people = People::all();
        $smart = DB::table('smart_vaccines')
        ->join('people','people.nic','=','smart_vaccines.nic')
        ->get();
        return view('mohstaff.smart',compact('people','smart'));
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
     * @param  \App\Models\Mohstaff  $mohstaff
     * @return \Illuminate\Http\Response
     */
    public function show(Mohstaff $mohstaff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mohstaff  $mohstaff
     * @return \Illuminate\Http\Response
     */
    public function edit(Mohstaff $mohstaff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mohstaff  $mohstaff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mohstaff $mohstaff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mohstaff  $mohstaff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mohstaff $mohstaff)
    {
        //
    }
}
