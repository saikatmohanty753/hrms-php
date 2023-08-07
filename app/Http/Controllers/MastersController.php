<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Auth;
use Hash;

class MastersController extends Controller
{
    /* User Master */
    public function userMaster(){
        $roles = DB::table('roles')->select('id','name')->orderBy('name', 'ASC')->get();
        return view('masters.users.add',compact('roles'));
    }

    public function createUserMaster(Request $request){

        $this->validate($request, [
            'name' =>'required',
            'email' =>'required|email|unique:users,email',
            'role_id' =>'required',
            'username' =>'required|unique:users,username',
        ]);
        try{
            $password = 'oasys@123';
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->username = $request->username;
            $user->password = Hash::make($password);
            $user->role_id = $request->role_id;
            if($user->save())
            {
                $user->assignRole($request->role_id);
                session()->put('success','User has been created successfully');
                return redirect()->route('users.list');
            }
            session()->put('error','Failed to create user');
            return redirect()->route('users.index');
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function userList(){
        $users = User::orderBy('id', 'desc')->get();
        return view('masters.users.list',compact('users'));
    }

    public function userEdit($id){
        if(!empty($id)){
            $id = decrypt($id);
            $users = User::find($id);
            $roles = DB::table('roles')->select('id','name')->get();
        }else{
            return back();
        }
        return view('masters.users.edit',compact('users','roles','id'));
    }

    public function userDelete($id){

    }

    public function userUpdate(Request $request){
        $this->validate($request, [
            'name' =>'required',
            'email' =>'required|email|unique:users,email,'.$request->id,
            'role_id' =>'required',
            'username' =>'required|unique:users,username,'.$request->id,
        ]);
        try{
            $password = 'oasys@123';
            $user =  User::where('id',$request->id);
            if($user->exists()){
                $user = $user->first();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->username = $request->username;
                $user->role_id = $request->role_id;
                if($user->save())
                {
                    $user->assignRole($request->role_id);
                    session()->put('success','User has been updated successfully');
                    return redirect()->route('users.list');
                }
                session()->put('error','Failed to update user');
                return redirect()->route('users.index');
            }
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    /* End User Master */
}
