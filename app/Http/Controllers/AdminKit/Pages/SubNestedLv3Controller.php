<?php

namespace App\Http\Controllers\AdminKit\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubNestedLv3Controller extends Controller
{
    public function index()
    {
        return view('adminkit.pages.subnestedlv3');
    }

    public function item1()
    {
        return view('adminkit.pages.subnestedlv3_item1');
    }

    public function item2()
    {
        return view('adminkit.pages.subnestedlv3_item2');
    }

    public function item3()
    {
        return view('adminkit.pages.subnestedlv3_item3');
    }
}
