<?php

/**
 * 
 */

class Home extends Controller
{
	function index()
	{
		$user = new User;

		$datas = [
			'firstname' => 'Shibli',
			'lastname' => 'Raihan',
			// 'email' => 'eathorxxne@yahoo.com',
			// 'date' => '2021-08-10 19:08:58',
			// 'user_id' => 'eathoxxrne.banda',
			// 'gender' => 'male',
			// 'school_id' => '0PbzcO3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH',
			// 'rank' => 'super_admin',
			// 'password' => '$2B8ZBzw6Ocrci',
			// 'image' => 'uploads/cindaral_1585854603.jpg',
		];
		// $insert =
		// $user->insert($datas);
		// if($insert) 
		// {
		// $user->update('983',$datas);
		// $user->delete('982');

		$data = $user->findAll();
		$this->view("home", ['rows' => $data]);
		// }

	}
}
