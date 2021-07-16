<?php

namespace App\Http\Controllers\AdminKit\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartPageController extends Controller
{
    public function index()
    {
        return view('adminkit.pages.chart');
    }
}
