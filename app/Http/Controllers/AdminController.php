<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('Dashboard.index');
    }

    public function charts(){
        return view('Dashboard.pages.charts.chartjs');
    }
}