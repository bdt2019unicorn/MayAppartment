<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use URL; 
use Redirect;
use App\Http\Controllers\Main_Controller; 
use Illuminate\Support\Facades\Log;

class Contact extends Main_Controller
{
    public function index()
    {
        return view("Site/Contact/index");
    }
}
