<?php 
/**
 * 
 */

class Home extends Controller
{
	
	function index()
	{
		$db = new Database();
		$data = $db->run("select * from users");
		$this->view('home',['rows' => $data]);
	}
}