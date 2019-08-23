<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use URL; 
use Redirect;
use App\Http\Controllers\Main_Controller; 
use Illuminate\Support\Facades\Log;

class Booking extends Main_Controller
{
    public function index(Request $request)
    {
        return view("Site/Booking/index");
    }

    public function AppartmentsList(Request $request)
    {
    	$mysql = "SELECT * FROM `appartments`"; 
    	$list = get_array($mysql); 
    	echo json_encode($list);
    }

    public function RoomsList(Request $request)
    {
        $where = $request->all(); 
        $mysql = "SELECT * FROM `rooms`";
        if(count($where)>0)
        {
            $mysql.=" WHERE "; 
            if(isset($where['name']))
            {
                $mysql.= " name like '%".$where['name']."%' and ";
            }
            if(isset($where['appartment_id']))
            {
                $mysql.= " appartment_id = '".$where['appartment_id']."' and ";
            }
            $mysql.="1=1;"; 
        }
    	$list = get_array($mysql); 
    	echo json_encode($list);
    }

    public function RoomDetails(Request $request)
    {

    }
}
