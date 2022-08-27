<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
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
        return view('admin.user.manage', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
           'name' => 'required',
           'email' => 'required | unique:users' ,
        ]);

        User::createUser($request);
        return back()->with('message', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.user.edit', [
            'user' => User::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::updateUser($request, $id);
        return redirect(route('users.index'))->with('message', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    protected static $userDetail;
    protected static $user;

    public function destroy($id)
    {
        self::$userDetail = UserDetail::find($id)->delete();
        self::$user = User::find($id)->delete();
        return back()->with('message', 'User deleted successfully');
    }



    public function changeStatus($id)
    {
        self::$user = User::find($id);
        if (self::$user->status == 1)
        {
            self::$user->status = 0;
        }
        elseif (self::$user->status == 0)
        {
            self::$user->status = 1;
        }
        self::$user->save();
        return back()->with('message', 'User status changed successfully');
    }
}
