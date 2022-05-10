<?php

namespace App\Http\Controllers;

use App\Models\Plans;
use App\Models\Usersbalance;
use Illuminate\Http\Request;
use App\Models\User;
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

    public function index()
    {
        $users=User::all();
        $notifications = auth()->user()->unreadNotifications;
//        dd($notifications);
        return view('admin/User/index',compact('users','notifications'));
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
        $user->type=$request->type;
        $user->balance=$request->balance;
        $user->status=$request->status;
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
        $user->type=$request->type;
        $user->balance=$request->balance;
        $user->status=$request->status;
        $save=$user->update();
        if ($save){
            return redirect()->route('userindex')->with(['successmsg' => 'User Updated Sucessfully...']);
        }
    }

    public function updatebalance(Request $request){
        $user= array();
        $user['balance']= $request->balance;
        $save=DB::table('users')->where('id',$request->edit_id)->update($user);
        if ($save){
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
