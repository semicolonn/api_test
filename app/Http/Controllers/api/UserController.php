<?php

namespace App\Http\Controllers\api;


use App\Http\Controllers\Controller;
use App\User;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Get the users
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return User::all();
    }

}