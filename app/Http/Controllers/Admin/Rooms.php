<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use URL; 
use Redirect;
use App\Http\Controllers\Main_Controller; 
use Illuminate\Support\Facades\Log;

class Rooms extends Admin_Controller
{
    public $table = "rooms"; 
    public function index()
    {
        return view("Admin/Rooms/index");
    }

    public function GetList(Request $request)
    {
        $where = $request->all(); 
        $list = $this->List($where); 
        echo json_encode($list); 
    }

    public function Add(Request $request)
    {
        $data = $request->all(); 
        unset($data["ID"]); 
        $mysql = $this->insert_MYSQL($data); 
        $exec = exec_MYSQL($mysql);
        if($exec)
        {
            echo 'true';
        }
        else 
        {
            echo 'false'; 
        }
    }

    public function Edit(Request $request)
    {

    }

    public function Delete(Request $request)
    {
        $where = $request->all(); 
        $mysql = $this->delete_MYSQL($where); 
        $result = exec_MYSQL($mysql); 
        if($result)
        {
            echo "true"; 
        }
        else
        {
            echo "false"; 
        }
    }


    private function List($where)
    {
        $mysql = "SELECT * FROM `rooms` "; 
        if(count($where)>0)
        {
            $mysql.=$this->MYSQL_WHERE($where); 
        }
        $list = get_array($mysql); 
        return $list; 
    }
}
