<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestsController extends Controller
{
    public function test(){
        $users=User::all();
        return view('test',compact('users'));
    }
    public function save(Request $request){
        $user = $request->post();
        $myUser = new User;
        $myUser->createMessage($user);
        $users=User::all();
        return view('test',compact('users'));
    }
}
