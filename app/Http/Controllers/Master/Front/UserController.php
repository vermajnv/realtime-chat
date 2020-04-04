<?php

namespace App\Http\Controllers\Master\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.front.index', ['users' => User::all()]);
    }

    public function assignRole($role)
    {

        // return view('master.front.')
    }
}
