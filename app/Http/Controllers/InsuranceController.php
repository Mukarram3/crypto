<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Http\Requests\StoreInsuranceRequest;
use App\Http\Requests\UpdateInsuranceRequest;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insurances= Insurance::all();
        return view('admin/InsurancePlan/index',compact('insurances'));
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
     * @param  \App\Http\Requests\InsuranceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insurance= new Insurance();
        $insurance->name=$request->name;
        $insurance->percent=$request->increment;
        $insurance->extraperplan=$request->extraperplan;
        $insurance->withdrawaldiscount=$request->withdrawaldiscount;
        $insurance->bettingwinrate=$request->bettingwinrate;
        $insurance->minbalance=$request->minbalance;
        $insurance->description=$request->description;
        $save=$insurance->save();
        if ($save){
            return redirect()->route('insuranceplainindex')->with(['successmsg'=> 'Plan Created Sucessfully...']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userinsurance  $userinsurance
     * @return \Illuminate\Http\Response
     */
    public function show(Insurance $insurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userinsurance  $userinsurance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan=Insurance::find($id);
        return $plan;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserinsuranceRequest  $request
     * @param  \App\Models\Userinsurance  $userinsurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $insurance= Insurance::find($request->editid);
        $insurance->name=$request->name;
        $insurance->percent=$request->increment;
        $insurance->extraperplan=$request->extraperplan;
        $insurance->withdrawaldiscount=$request->withdrawaldiscount;
        $insurance->bettingwinrate=$request->bettingwinrate;
        $insurance->minbalance=$request->minbalance;
        $insurance->description=$request->description;
        $save=$insurance->save();
        if ($save){
            return response()->json(['code' => 1,'successmsg'=> 'Plan Updated Sucessfully...']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userinsurance  $userinsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $query= Insurance::find($request->id)->delete();
        if($query){
            return response()->json(['code'=>1, 'msg'=>'Insurance Plan has been deleted...']);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Something went wrong']);
        }
    }
}
