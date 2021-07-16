<?php

namespace App\Http\Controllers\AdminKit\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('adminkit.ui-components.form');
    }
}
