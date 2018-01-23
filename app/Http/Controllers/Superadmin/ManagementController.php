<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ManagementController extends Controller
{
    public function index() {

        $users = User::all();

        return view('admin.superadmin.management', compact('users'));
    }
}
