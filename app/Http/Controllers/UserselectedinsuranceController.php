<?php

namespace App\Http\Controllers;

use App\Jobs\InsurancePlanJob;
use App\Models\Userselectedinsurance;
use App\Models\Userselectedplan;
use App\Models\User;
use App\Models\Plans;
use App\Models\Insurance;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserselectedinsuranceRequest;
use App\Http\Requests\UpdateUserselectedinsuranceRequest;

class UserselectedinsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $insurances = Insurance::all();
        $usersinsurances = Userselectedinsurance::with('hasusers', 'hasinsurance')->get();
//        return  $balances;
        return view('admin/Userselectedinsurance/index', compact('usersinsurances', 'users', 'insurances'));
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
     * @param \App\Http\Requests\StoreUsersbalanceRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plan= Userselectedplan::where('userid',$request->userid)->first();
        if($plan){
            $user=User::find($request->userid);
        $plan=Insurance::find($request->insuranceid);

        $selectedinsurance=Userselectedinsurance::where('userid',$request->userid)->where('insuranceid',$request->insuranceid)->first();
        if($selectedinsurance){
            return redirect()->route('userselectedinsuranceindex')->with(['successmsg' => 'Insurance Plan Already Selected']);
//            return response()->json(['code' => 1, 'msg' => 'Insurance Plan Already Selected']);
        }
        else{
            if($user->balance >= $plan->minbalance){

                $Userselectedinsurance = new Userselectedinsurance();
                $Userselectedinsurance->userid = $request->userid;
                $Userselectedinsurance->insuranceid = $request->insuranceid;
                $save = $Userselectedinsurance->save();
                if ($save) {
                    InsurancePlanJob::dispatch($user,$plan)->delay(now()->addMinutes(4320));
                    return redirect()->route('userselectedinsuranceindex')->with(['successmsg' => 'New Record has been successfully saved']);
//                    return response()->json(['code' => 1, 'msg' => 'New Record has been successfully saved']);
                }

        }
        else{
            return redirect()->route('userselectedinsuranceindex')->with(['successmsg' => 'Please Update Balance According to Insurance']);
//            return response()->json(['code' => 1, 'msg' => 'Please Update Balance According to Insurance']);
        }

        }

        }
        else{
              return redirect()->route('userselectedinsuranceindex')->with(['successmsg' => 'Please Choose Plan First']);
//            return response()->json(['code' => 1, 'msg' => 'Please Choose Plan First']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Usersbalance $usersbalance
     * @return \Illuminate\Http\Response
     */
    public function show(Userselectedplan $usersbalance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Userselectedplan $usersbalance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $balance = Userselectedinsurance::find($id);
        return $balance;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateUsersbalanceRequest $request
     * @param \App\Models\Usersbalance $usersbalance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $plan= Userselectedplan::where('userid',$request->userid)->first();
        if($plan){
            $user=User::find($request->userid);
        $plan=Insurance::find($request->insuranceid);
            if($user->balance >= $plan->minbalance){

                $Userselectedinsurance = Userselectedinsurance::find($request->edit_id);
                $Userselectedinsurance->userid = $request->userid;
                $Userselectedinsurance->insuranceid = $request->insuranceid;
                $save = $Userselectedinsurance->save();
                if ($save) {
                    return redirect()->route('userselectedinsuranceindex')->with(['successmsg' => 'Record Updated successfully']);
//                    return response()->json(['code' => 1, 'msg' => 'New Record has been successfully saved']);
                }

        }
        else{
            return redirect()->route('userselectedinsuranceindex')->with(['successmsg' => 'Please Update Balance According to Insurance']);
//            return response()->json(['code' => 1, 'msg' => 'Please Update Balance According to Insurance']);
        }
        }
        else{
            return redirect()->route('userselectedinsuranceindex')->with(['successmsg' => 'Please Choose Plan First']);
//            return response()->json(['code' => 1, 'msg' => 'Please Choose Plan First']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Usersbalance $usersbalance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Userselectedplan $usersbalance)
    {
        //
    }
}
