<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use App\Http\Requests\StorePlansRequest;
use App\Http\Requests\UpdatePlansRequest;
use Illuminate\Http\Request;
class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans=Plans::all();
        return view('admin/Plan/index',compact('plans'));
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
     * @param  \App\Http\Requests\StoreUserplanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= new Plans();
        $user->name=$request->name;
        $user->percent=$request->increment;
        $user->minbalance=$request->minbalance;
        $user->description=$request->description;
        $save=$user->save();
        if ($save){
            return redirect()->route('plainindex')->with(['successmsg' => 'Plan Created Sucessfully...']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plans  $userplan
     * @return \Illuminate\Http\Response
     */
    public function show(Plans $userplan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userplan  $userplan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan=Plans::find($id);
        return $plan;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlansRequest  $request
     * @param  \App\Models\Plans  $userplan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $plan= Plans::find($request->id);
        $plan->name=$request->name;
        $plan->percent=$request->increment;
        $plan->minbalance=$request->minbalance;
        $plan->description=$request->editdescription;
        $save=$plan->save();
        if ($save){
            return redirect()->route('plainindex')->with(['successmsg' => 'Plan Updated Sucessfully...']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plans  $userplan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $query= Plans::find($request->id)->delete();
        if($query){
            return response()->json(['code'=>1, 'msg'=>'Plan has been deleted...']);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Something went wrong']);
        }
    }
}
