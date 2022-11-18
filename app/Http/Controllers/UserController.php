<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, User $user)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        /* dd($request->all()); */
        
        
        DB::table('users')
              ->where('id', $id)
              ->update(['name' => $request->name , 'email' => $request->email, 
              'password' => password_hash($request->password, PASSWORD_DEFAULT),
            'role' => $request->role]);

        /* $user=User::where('id', $id)->get(); */

        /* dd(password_hash($request->password, PASSWORD_DEFAULT)); */


        
        /* $user->update(['name' => $request->name , 'email' => $request->email, 
        'password' => password_hash($request->password, PASSWORD_DEFAULT)]); */

        return redirect('/UserManagement');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,User $user)
    {
        $delete = User::where('id', $id)->delete();
        return redirect('/UserManagement');
    }
}
