<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Admin;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.user.index', ['admins' => Admin::all(), 'roles' => Role::all()]);
    }

    public function viewAssignRole()
    {
        return view('master.user.assign-role', ['roles' => Role::all()]);
    }
}
