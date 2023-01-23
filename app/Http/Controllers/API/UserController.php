<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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

    public function adminGetUser(Request $request)
    {
        $user_exist =  User::where('email', $request->email)->first();
        if (!$user_exist) {
            return ['status' => false, 'response_message' => 'Email does not exist', 'data' => 'Email does not exist'];
        }
        if (!($user_exist->is_admin)) {
            return ['status' => false, 'response_message' => 'User is not an admin', 'data' => 'User is not an admin'];
        }
        $user = new User();

        $user = $user->orderBy('created_at', 'DESC')->with(['department', 'adjor'])->get();

        return [
            'status' => true,
            'response_message' => 'User retrieved successfuly, ',
            'data' => $user
        ];
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
        $user = User::create([
            'name' =>  $request->name,
            'email' =>  $request->email,
            'password' =>  $request->password,
            'is_admin' => false,
            'department_id' =>  $request->department_id,
        ]);

        return [
            'status' => true,
            'response_message' => 'User registered successfuly, ',
            'data' => $user
        ];
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
