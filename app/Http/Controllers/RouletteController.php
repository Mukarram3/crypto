<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RouletteController extends Controller
{
    public function index(){
        return view('user.roulette');
    }
    public function rouletteaddprize($prize){
        $user= User::find(auth()->user()->id);
        $user->balance= $user->balance + $prize;
        $user->save();
        return redirect()->route('roulette')->with(['successmsg' => 'Prize suuccessfully added to balance']);
    }

    public function roulettededbalance($dedbalance){
        $user=User::find(auth()->user()->id);
        $user->balance=$user->balance-$dedbalance;
        $user->save();
        // return response()->json(['msg' => '1 Bet price Successfully Deducted because Atleast two numbers not matched. Only one Number Matched Please Start new Game']);
        return redirect()->route('roulette')->with(['msg' => '1 Bet price Successfully Deducted because Atleast two numbers not matched. Only one Number Matched Please Start new Game']);
    }
}
