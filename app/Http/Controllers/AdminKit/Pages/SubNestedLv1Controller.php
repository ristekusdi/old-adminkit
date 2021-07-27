<?php

namespace App\Http\Controllers\AdminKit\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubNestedLv1Controller extends Controller
{
    public function index()
    {
        return view('adminkit.pages.subnestedlv1');
    }
}
