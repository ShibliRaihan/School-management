<?php

class Auth
{
    public static function authenticate ($row)
    {
        $_SESSION['USER'] = $row;
    }
    public static function log_out ()
    {
        if (isset($_SESSION['USER'])) {
            unset($_SESSION['USER']);
        }
    }
    public static function logged_in ()
    {
        if (isset($_SESSION['USER'])) {
            return true;
        }
        return false;
    }
    public static function user ()
    {
        if (isset($_SESSION['USER'])) {
            return $_SESSION['USER']->firstname;
        }
        return false;
    }
    public static function __callStatic($method,$params) 
    {
        echo $method;
    }
}
