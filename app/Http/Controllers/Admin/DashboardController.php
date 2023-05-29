<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        $user = User::all();
        return view('admin.dashboard', compact('user'));
    }
}