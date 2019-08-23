<?php 
use App\Quotation;

function exec_MYSQL($mysql)
{
	try
	{
		DB::statement($mysql);
		return true; 
	}
	catch(\Exception $e)
	{
		return false; 
	}
}

function execTransaction($array)
{
	$result = true; 
	DB::beginTransaction();

	try
	{
		foreach ($array as $key => $value) 
		{
			DB::statement($value);
		}
		DB::commit();
	}
	catch(\Exception $e)
	{
		DB::rollback();
		$result = false; 
	}
	return $result; 
}

function get_array($mysql)
{
	try
	{
		$array = DB::select($mysql); 
		return $array; 
	}
	catch(\Exception $e)
	{
		return null; 
	}
}

?>