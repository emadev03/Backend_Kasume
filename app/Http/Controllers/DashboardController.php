<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        return view('admin&superadmin.dashboard', compact('title'));
    }
    public function index2()
    {
        $title = 'Dashboard';
        return view('user.dashboard', compact('title'));
    }
}
