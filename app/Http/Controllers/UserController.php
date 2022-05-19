<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        foreach($users as $key=>$val){
            
            $role_ids = UserRole::where('user_id', $val->id)->pluck('role_id')->toArray();
            $roles = Role::whereIn('id', $role_ids)->pluck('title')->toArray();
            // dd($roles);
            $users[$key]->roles = implode(', ',$roles);
        }
        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'roles'=>'required'
        ]);        

        try{
            $inserted_user = User::create(
                [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => bcrypt('password')
                ]
            );

            $roles = explode(',',$request->input('roles'));
            foreach($roles as $key=>$val){
                UserRole::create(
                    [
                        'user_id' => $inserted_user->id,
                        'role_id' => $val
                    ]
                );
            }
            
    
            return response()->json([
                'message'=>'User Created Successfully!!'
            ]);
        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return response()->json([
                'message'=>'Something goes wrong while creating a user!!'
            ],500);
        }
    }
}