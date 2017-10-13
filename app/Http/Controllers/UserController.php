<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Group;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        return $user = $this->user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->user->getAll();
        return $data->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'first_name' => 'required|between:3,255',
            'last_name' => 'required|between:3,255',
            'email' => 'email',
            'state' => 'required|integer',
            'group' => 'reqired|between:3,255',
        ]);

        $user = new User($request->all());
        $group = new Group($request->all());
        $user->creation_date = \Carbon\Carbon::now();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->user->getById($id);

        return $data;
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
        $user = User::findOrFail($id);
    }

}
