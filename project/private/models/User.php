<?php

/**
 * User Model
 */
class User extends Model
{
    public function validated($DATA,) 
    {
        $this->errors = [];
        if (empty($DATA['fname']) || !preg_match("/^[a-zA-Z]+$/",$DATA['fname'])) {
            $this->errors['first_name'] = "Only letters allowed in first name";
        }
        if (empty($DATA['lname']) || !preg_match("/^[a-zA-Z]+$/",$DATA['lname'])) {
            $this->errors['last_name'] = "Only letters allowed in last name";
        }
        if (empty($DATA['email']) || filter_var($DATA['email'],FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Only email allowed!";
        }
        if (empty($DATA['gender'])) {
            $this->errors['gender'] = "Select gender!";
        }
        if (empty($DATA['role'])) {
            $this->errors['role'] = "Select role!";
        }



        if (count($this->errors)==0) {
            return true;
        }
        return false;
    }
}