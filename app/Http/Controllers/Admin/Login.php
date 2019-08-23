<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Main_Controller; 
use Illuminate\Support\Facades\View;
use URL; 
use Illuminate\Support\Facades\Log;
use Redirect;
use DB; 

class Login extends Main_Controller
{
    public function index()
    { 
    	$admin_username = $this->get_session('admin_username'); 

        if($admin_username!=null)
        {
            return $this->Authorized_login($admin_username); 
        }
        else 
        {
            return view("Admin/Home/login");
        }

    }

    private function Authorized_login($admin_username)
    {
        $_SESSION["admin_username"] = $admin_username; 
        return redirect()->route("Admin/Home"); 
    }

    public function login(Request $request)
    {

        $admin = $request->all(); 
        unset($admin['_token']); 
        $admin["password"] = base64_encode($admin['password']); 

        $mysql = "SELECT * FROM `admin` WHERE ";
        foreach ($admin as $key => $value) 
        {
        	$mysql.=$key.="='".$value."' and ";
        }
        $mysql.=" 1=1;"; 

        $list = get_array($mysql); 
        if(count($list)==1)
        {
        	$admin_username = $list[0]->username; 
            return $this->Authorized_login($admin_username); 
        }
        else
        {
            return redirect()->route("Admin/Login"); 
        }
    }

    public function logout()
    {
    	unset($_SESSION["admin_username"]); 
        return redirect()->route("Admin/Login"); 
    }

    public function register()
    {

    }
}