<?php

/**
 * change school controller
 */
class Switch_school extends Controller
{

    function index($id = '')
    {
        // code...
        if (Auth::access('Super')) {
            Auth::switch_school($id);
        }

        $this->redirect('schools');
    }
}
