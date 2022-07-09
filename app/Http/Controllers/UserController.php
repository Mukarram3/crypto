<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\Plans;
use App\Models\Referal;
use App\Models\Usersbalance;
use App\Models\Userselectedinsurance;
use App\Models\Userselectedplan;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index2(){
        $plans=Plans::with('hasselectedplans')->get();
        $insurances=Insurance::all();
        $notifications = auth()->user()->unreadNotifications;
        $selectedplans= Userselectedplan::where('userid',auth()->user()->id)->get();
        $selectedinsurances= Userselectedinsurance::where('userid',auth()->user()->id)->get();
        return view('user/index',compact('plans','insurances','notifications','selectedplans','selectedinsurances'));

    }

    public function index()
    {
        $users=User::all();
        $roles=Role::all(); 
        // $userRole = $users->roles->pluck('name','name')->all();
        $notifications = auth()->user()->unreadNotifications;
//        dd($notifications);
        return view('admin/User/index',compact('users','notifications','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->balance=$request->balance;
        $user->status=$request->status;
        $user->assignrole($request->role);
        $save=$user->save();
        if ($save){
            return redirect()->route('userindex')->with(['successmsg' => 'User Created Sucessfully...']);
        }
//        Session::flash('successmsg','User Created Sucessfully...');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "edit";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user= User::find($id);
        // $roles = Role::pluck('name','name')->all();
        // $userRole = $user->roles->pluck('name','name')->all();
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $user= User::find($request->edit_id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->balance=$request->balance;
        $user->status=$request->status;
        $user->assignRole($request->role);
        $save=$user->update();
        if ($save){
            return redirect()->route('userindex')->with(['successmsg' => 'User Updated Sucessfully...']);
        }
    }

    public function updatebalance(Request $request){
        $user= array();
        $user['balance']= $request->balance;
        $save=DB::table('users')->where('id',$request->edit_id)->update($user);
        $user=User::find($request->edit_id);

        if ($save){

        if ($user->balance >=35){

            $referal= Referal::where('newuserid','=',$request->edit_id)->first();
            if (!empty($referal)){

                $inviterid=$referal->inviterid;

                $inviter=User::find($inviterid);
                $inviter->balance=$inviter->balance+7;
                $inviter->save();
                Referal::where('newuserid','=',$request->edit_id)->first()->delete();

            }

        }

        return redirect()->route('userindex')->with(['successmsg' => 'Balance Updated Sucessfully...']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $query = User::find($request->id)->delete();

        if($query){
            return response()->json(['code'=>1, 'msg'=>'User has been deleted...']);
        }else{
            return response()->json(['code'=>0, 'msg'=>'Something went wrong']);
        }
    }

    // public function markNotification(Request $request)
    // {
    //     auth()->user()
    //         ->unreadNotifications
    //         ->when($request->input('id'), function ($query) use ($request) {
    //             return $query->where('id', $request->input('id'));
    //         })
    //         ->markAsRead();

    //     return response()->noContent();
    // }
}
