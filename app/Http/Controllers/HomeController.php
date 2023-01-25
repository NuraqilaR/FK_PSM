<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if($role=='1')
        {
            return view('coordinator');
        }
        if($role=='2')
        {
            return view('lecturer');
        }
        else
        {
            return view('dashboard');
        }
    }

    public function userList()
    {
        return view('userList');
    }
}
