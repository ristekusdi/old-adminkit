<?php

namespace App\Http\Controllers\AdminKit\Components;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IconsController extends Controller
{
    public function index()
    {
        return view('adminkit.ui-components.icons');
    }
}
