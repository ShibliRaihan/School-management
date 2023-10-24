<?php

class Logout extends Controller
{
    function index ()
    {
        Auth::log_out();
        $this->view('login');
    }
}
