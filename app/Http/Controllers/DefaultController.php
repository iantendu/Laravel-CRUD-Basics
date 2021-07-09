<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function customers()
    {
        return view('customers.index');
    }
    public function admin()
    {
        return view('admin.index');
    }
    public function welcome()
    {
        return view('welcome')->with(['success' => true]);
    }
}
