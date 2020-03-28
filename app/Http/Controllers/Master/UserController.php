<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Admin;
use Auth;
use Hash;
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
        $admin = Admin::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return ($admin) ? redirect()->route('users.index')->with(['message' => 'User created successfully']) : redirect()->back()->with(['message' => 'User cannot be created. Please try again.']);
    }
}
