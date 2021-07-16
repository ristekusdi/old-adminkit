<?php

namespace App\Http\Controllers\AdminKit\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilePageController extends Controller
{
    public function index()
    {
        return view('adminkit.pages.profile');
    }
}
