<?php

namespace App\Http\Controllers\Admin;

use URL; 
use Redirect;
use App\Http\Controllers\Main_Controller; 
use Illuminate\Support\Facades\Log;

class Admin_Controller extends Main_Controller
{
    public function __construct()
    {
    	parent::__construct(); 
    	$admin_username = $this->get_session('admin_username'); 

		if($admin_username==null)
		{
			Redirect::to("Admin/Login")->send();
		}
	}
}
