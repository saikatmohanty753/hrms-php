<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MastersController extends Controller
{
    /* User Master */
    public function userMaster(){
        $users = User::orderBy('id', 'desc')->get();
        return view('masters.users.add');
    }

    public function createUserMaster(Request $request){

    }

    public function userList(){
        $users = User::orderBy('id', 'desc')->get();
        return view('masters.users.list',compact('users'));
    }

    public function userEdit($id){
        return view('masters.users.edit');
    }

    public function userDelete($id){

    }

    public function userUpdate(){

    }
    /* End User Master */
}
