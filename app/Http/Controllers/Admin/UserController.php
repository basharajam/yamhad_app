<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    
    // Ensure the class starts with this line
    public function index()
    {
        // Fetch all users with their roles and permissions
        $users = User::with('roles', 'permissions')->get();

        // Pass users to the view
        return view('admin.users.index', compact('users'));
    }
}

