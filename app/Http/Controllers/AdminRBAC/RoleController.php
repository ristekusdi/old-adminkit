<?php

namespace App\Http\Controllers\AdminRBAC;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('pages.admin-rbac.role');
    }
}
