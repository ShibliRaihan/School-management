<?php

/**
 * User Model
 */
class User extends Model
{
    protected $allowed_colum = [
        'firstname',
        'lastname',
        'email',
        'gender',
        'rank',
        'password',
        'date',
    ];
    protected $before_insert = ['make_user_id','make_school_id','hash_password'];
    public function validated($DATA) 
    {
        $this->errors = [];
        if (empty($DATA['firstname']) || !preg_match("/^[a-zA-Z]+$/",$DATA['firstname'])) {
            $this->errors['first_name'] = "Only letters allowed in first name";
        }
        if (empty($DATA['lastname']) || !preg_match("/^[a-zA-Z]+$/",$DATA['lastname'])) {
            $this->errors['last_name'] = "Only letters allowed in last name";
        }
        if (empty($DATA['email']) || !filter_var($DATA['email'],FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Only email allowed!";
        }
        if ($this->where('email', $DATA['email'])) {
            $this->errors['email'] = "The email already used!";
        }
        if (empty($DATA['gender'])) {
            $this->errors['gender'] = "Select gender!";
        }
        if (empty($DATA['rank'])) {
            $this->errors['role'] = "Select role!";
        }



        if (count($this->errors)==0) {
            return true;
        }
        return false;
    }

    public function make_user_id($data)
    {
        $data['user_id'] = strtolower($data['firstname'] . "." . $data['lastname']);

        while ($this->where('user_id', $data['user_id'])) {
            $data['user_id'] .= rand(1, 60);
        }

        return $data;
    }


    public function make_school_id($data)
    {
        if (isset($_SESSION['USER']->school_id)) {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }

    public function hash_password($data)
    {
        if (isset($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        return $data;
    }
}