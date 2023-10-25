<?php

/**
 * User Model
 */
class School extends Model
{
    protected $allowed_colum = [
        'school ',
        'date',
    ];
    protected $before_insert = [
        'make_user_id', 
        'make_school_id',
        ];
    public function validated($DATA)
    {
        $this->errors = [];
        if (empty($DATA['school']) || !preg_match("/^[a-zA-Z]+$/", $DATA['firstname'])) {
            $this->errors['school'] = "Only letters allowed in school name!";
        }
        
        if (count($this->errors) == 0) {
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
        $data['school_id'] = rand(1, 60);
        return $data;
    }

}
