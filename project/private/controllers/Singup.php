<?php

class Singup extends Controller
{
    function index(){
        $errors = [];
        if (count($_POST) > 0) {
            $user = new User;
            if ($user->validated($_POST)) 
            {
                // $arr = [
                //     'firstname' => ,
                //     'lastname ' => ,
                //     'email' => ,
                //     'gender' => 
                //     'rank' => ,
                //     'password' => ,
                    
                //     'image' => date("Y-m H:i:s"),
                //     'school_id' => date("Y-m H:i:s"),
                //     'user_id' => date("Y-m H:i:s"),
                // ];

                $datas = [
                    'firstname' => $_POST['fname'],
                    'lastname' => $_POST['lname'],
                    'email' => $_POST['email'],
                    'date' => date("Y-m H:i:s"),
                    'user_id' => 'eathoxxrne.banda',
                    'gender' => $_POST['gender'],
                    'school_id' => '0PbzcO3ZaG5rpvjeleQ3UHSWE81m00vLyqNGBEgK4waH',
                    'rank' => $_POST['role'],
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                    // 'image' => 'uploads/cindaral_1585854603.jpg',
                ];

                $user->insert($datas);
                $this->redirect('login');
            }else
            {
                $errors = $user->errors;
            }
        }
        $this->view('singup',['errors'=>$errors]);
    }
}
