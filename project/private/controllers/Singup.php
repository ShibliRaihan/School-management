<?php

class Singup extends Controller
{
    function index(){
        $errors = [];
        if (count($_POST) > 0) {
            $user = new User;
            if ($user->validated($_POST)) 
            {
                $_POST['date'] =  date("Y-m-d H:i:s");
                $user->insert($_POST);
                $this->redirect('login');
            }else
            {
                $errors = $user->errors;
            }
        }
        $this->view('singup',['errors'=>$errors]);
    }
}
