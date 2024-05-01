<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard.home');
    }
    public function events()
    {
        return view('dashboard.events');
    }

    public function eventEdit()
    {
        return view('dashboard.event-edit');
    }

    public function tickets()
    {
        return view('dashboard.tickets');
    }

}
