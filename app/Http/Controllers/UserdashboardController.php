<?php

namespace App\Http\Controllers;

use App\Events\InsuranceEvent;
use App\Events\planevent;
use App\Models\User;
use App\Console\Commands\DemoCron;
use App\Models\Plans;
use App\Models\Insurance;
use App\Models\Userselectedplan;
use App\Models\Userselectedinsurance;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Jobs\PlansJob;
use App\Jobs\InsurancePlanJob;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

class UserdashboardController extends Controller
{

    public function index(){

        $plans=Plans::with('hasselectedplans')->get();
        $insurances=Insurance::all();
        $notifications = auth()->user()->unreadNotifications;
        $selectedplans= Userselectedplan::where('userid',auth()->user()->id)->get();
        $selectedinsurances= Userselectedinsurance::where('userid',auth()->user()->id)->get();
        return view('user/userdashboard',compact('plans','insurances','notifications','selectedplans','selectedinsurances'));

    }

    public function chooseplan(Request $request){

//        event(new InsuranceEvent(auth()->user(),30));

        $plan=Plans::find($request->planid);

        $selectedplan= Userselectedplan::where('userid',auth()->user()->id)->where('planid',$request->planid)->first();

        if($selectedplan){
            return redirect()->route('dashboard')->with(['successmsg' => 'Plan Already Selected']);
//            return response()->json(['code' => 1, 'msg' => '']);
        }
        else{

            if(auth()->user()->balance >= $plan->minbalance){

                $Userselectedplan = new Userselectedplan();

                $Userselectedplan->userid = auth()->user()->id;
                $Userselectedplan->planid = $request->planid;
                $save = $Userselectedplan->save();
                if ($save) {

                    $user=User::find(auth()->user()->id);
                    PlansJob::dispatch($user,$plan)->delay(now()->addMinutes());
                    return redirect()->route('dashboard')->with(['successmsg' => 'Plan Selected Sucessfully...']);
//                        return response()->json(['code' => 1, 'msg' => ' successfully']);
                }

                else {
                    return redirect()->route('dashboard')->with(['successmsg' => 'Something went wrong']);
//                            return response()->json(['code' => 0, 'error' => 'Something went wrong']);
                }
            }
            else {
                return redirect()->route('dashboard')->with(['successmsg' => 'Please Update Balance To Choose Plan']);
//                        return response()->json(['code' => 0, 'error' => 'Please Update Balance To Choose Plan']);
            }
        }




                }

                public function chooseinsurance(Request $request){

                    $usershasplan=Userselectedplan::where('userid',auth()->user()->id)->first();
                    $user=User::find(auth()->user()->id);

                    $selectedinsurance=Userselectedinsurance::where('userid',auth()->user()->id)->where('insuranceid',$request->insuranceid)->first();
                    if($selectedinsurance){
                        return redirect()->route('dashboard')->with(['successmsg' => 'Insurance Plan Already Selected']);
                    }

                    else{

                        if($usershasplan){

                            $plan=Insurance::find($request->insuranceid);
                            if(auth()->user()->balance >= $plan->minbalance){

                                $Userselectedinsurance = new Userselectedinsurance();
                                $Userselectedinsurance->userid = auth()->user()->id;
                                $Userselectedinsurance->insuranceid = $request->insuranceid;
                                $save = $Userselectedinsurance->save();
                                if ($save) {
                                    InsurancePlanJob::dispatch($user,$plan)->delay(now()->addMinutes(4320));
                                    return redirect()->route('dashboard')->with(['successmsg' => 'Insurance Plan Selected successfully']);
//                     return response()->json(['code' => 1, 'msg' => 'Insurance Plan Selected successfully']);
                                }

                            }
                            else{
                                return redirect()->route('dashboard')->with(['successmsg' => 'Please Update Balance According to Insurance']);
//             return response()->json(['code' => 1, 'msg' => 'Please Update Balance According to Insurance']);
                            }


                        }
                        else{
                            return redirect()->route('dashboard')->with(['successmsg' => 'Please Choose Plan First']);
//             return response()->json(['code' => 1, 'msg' => 'Please Choose Plan First']);
                        }
                    }


                }


    public function markNotification(Request $request)
    {
        auth()->user()
            ->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();

        return response()->noContent();
    }

}
