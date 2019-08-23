<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use URL; 
use Redirect;
use App\Http\Controllers\Main_Controller; 
use Illuminate\Support\Facades\Log;

class Home extends Admin_Controller
{
    public function index()
    {
        return view("Admin/Home/index");
    }
}
