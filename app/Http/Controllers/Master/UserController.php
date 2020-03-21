<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Admin;
use Auth;

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

    public function assignRole(Request $request)
    {
        return Admin::find($request->user_id)->assignRole($request->data['role']);
    }

    public function show($id)
    {
        return view('master.user.profile', ['user' => Admin::find($id)]);
    }

    public function view($id = '')
    {
        $user = $id ? Admin::find($id) : Admin::find(Auth::user()->id);
        return view('master.user.profile', ['user' => $user]);
    }
}
