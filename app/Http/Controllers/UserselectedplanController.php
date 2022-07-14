<?php

namespace App\Http\Controllers;

use App\Jobs\PlansJob;
use App\Models\Userselectedplan;
use App\Models\User;
use App\Models\Plans;
use App\Models\Insurance;
use App\Http\Requests\StoreUserselectedplanRequest;
use App\Http\Requests\UpdateUserselectedplanRequest;
use Illuminate\Http\Request;
class UserselectedplanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $plans = Plans::all();
        $usersplans = Userselectedplan::with('hasusers', 'hasplans')->get();
//        return  $balances;
        return view('admin/Userselectedplans/index', compact('usersplans', 'users','plans'));
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

        $user=User::find($request->userid);
        $plan=Plans::find($request->planid);
        $selectedplan= Userselectedplan::where('userid',$request->userid)->where('planid',$request->planid)->first();
        $planalreadyselected=Userselectedplan::where('userid',$request->userid)->first();

        if($planalreadyselected){
            return redirect()->route('userselectedplanindex')->with(['planalreadyselected' => 'Only 1 Plan can be Selected at a time for this User']);
        }
        else{
            if($user->balance >= $plan->minbalance){

                $balance = new Userselectedplan();
                $balance->userid = $request->userid;
                $balance->planid = $request->planid;
                $save = $balance->save();
                if ($save) {

                    $user->balance=auth()->user()->balance - $plan->subscrcost;
                    $user->save();
                    PlansJob::dispatch($user,$plan)->delay(now()->addMinutes(4320));
                    return redirect()->route('userselectedplanindex')->with(['successmsg' => 'New Record has been successfully saved']);
//                        return response()->json(['code' => 1, 'msg' => 'New Record has been successfully saved']);
                }

        }
        else{
            return redirect()->route('userselectedplanindex')->with(['successmsg' => 'Please Update Balance According to Plan']);
//                return response()->json(['code' => 1, 'msg' => 'Please Update Balance According to Plan']);
        }
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

        $balance = Userselectedplan::find($id);
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

        $user=User::find($request->userid);
        $plan=Plans::find($request->planid);
        $selectedplan= Userselectedplan::where('userid',$request->userid)->where('planid',$request->planid)->first();
        // return $selectedplan;
        if($selectedplan){
            return redirect()->route('userselectedplanindex')->with(['successmsg' => 'Plan Already Selected']);
//            return response()->json(['code' => 1, 'msg' => 'Plan Already Selected']);
        }

        else{
            if($user->balance >= $plan->minbalance){

                    $balance = Userselectedplan::find($request->edit_id);
                    $balance->userid = $request->userid;
                    $balance->planid = $request->planid;
                    $save = $balance->save();
                    if ($save) {
                        return redirect()->route('userselectedplanindex')->with(['successmsg' => 'Record Updated successfully']);
//                        return response()->json(['code' => 1, 'msg' => 'Record Updated successfully']);
                    }

            }
            else{
                return redirect()->route('userselectedplanindex')->with(['successmsg' => 'Please Update Balance According to Plan']);
//                return response()->json(['code' => 1, 'msg' => 'Please Update Balance According to Plan']);
            }
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
