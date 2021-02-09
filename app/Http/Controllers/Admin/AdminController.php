<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $admin       = Auth::guard('admin')->user();
        $permissions =  Permission::all();
        return view('Admin.admin.index', compact('permissions'));
    }

    public function home()
    {
        return view('Admin.admin.home');
    }


}
