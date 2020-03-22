<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Admin;
use Auth;
use App\Http\Requests\AdminUserRegistration;

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

    public function view($id = '')
    {
        $user = $id ? Admin::find($id) : Admin::find(Auth::user()->id);
        return view('master.user.profile', ['user' => $user]);
    }

    public function create()
    {
        return view('master.user.create', ['roles' => Role::all()]);
    }

    public function store(AdminUserRegistration $request)
    {
        dd($request->validated());
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
