<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use URL; 
use Redirect;
use Illuminate\Support\Facades\Auth;

include_once(app_path() . '\Helper\Connect_helper.php');

class Main_Controller extends Controller
{
    public function __construct()
    {
        session_start();    
    }

    public $table = ""; 

    public function get_session($key)
    {
        $data = $_SESSION;
        try
        {
            $value = $data[$key]; 
            return $value; 
        }
        catch(\Exception $e)
        {
            return null; 
        }
    }

    public function insert_MYSQL($data)
    {
    	$mysql = "INSERT INTO `".$this->table."`(";
    	$values = " VALUES(";
		
		foreach ($data as $key => $value) 
		{
			$mysql.=$key.","; 
			$values.="'".$value."',"; 
		}
		$mysql = $this->RemoveLastComma($mysql); 
		$values = $this->RemoveLastComma($values); 

		$values.=");"; 
    	$mysql.=") ".$values;
    	return $mysql; 
    }

    public function update_MYSQL($data, $where)
    {
    	$mysql = 'UPDATE `'.$this->table.'` SET ';
    	foreach ($data as $key => $value) 
    	{
    		$mysql.=$key."="."'".$value."',"; 
    	}
    	$mysql= $this->RemoveLastComma($mysql);
    	$mysql.= $this->MYSQL_WHERE($where); 
    	return $mysql; 
    }

    public function delete_MYSQL($where)
    {
    	$mysql = "DELETE FROM `".$this->table."` ";
    	$mysql.=$this->MYSQL_WHERE($where); 
    	return $mysql; 
    }

    public function MYSQL_WHERE($where)
    {
        $mysql=""; 
        if(count($where)>0)
        {
            $mysql.=" WHERE "; 
            foreach ($where as $key => $value) 
            {
                $mysql.=$key."="."'".$value."' and ";
            }
            $mysql.=" 1=1;";
        }
    	return $mysql; 
    }

    private function RemoveLastComma($string)
    {
    	return substr_replace($string,"",strrpos($string, ','),1);
    }
}
