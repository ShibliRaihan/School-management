<?php

class Schools extends Controller
{
    public function index()
    {
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }
        $school = new School;
        $data = $school->findAll();
        $this->view("school", ['rows' => $data]);
    }
    public function add()
    {
        // code...
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $errors = array();
        if (count($_POST) > 0) {

            $school = new School();
            if ($school->validate($_POST)) {

                $_POST['date'] = date("Y-m-d H:i:s");

                $school->insert($_POST);
                $this->redirect('schools');
            } else {
                //errors
                $errors = $school->errors;
            }
        }

        $this->view('school.add',['errors'=> $errors]);
    }
    public function edit($id = null)
    {
        // code...
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $school = new School();

        $errors = array();
        if (count($_POST) > 0) {

            if ($school->validate($_POST)) {

                $school->update($id, $_POST);
                $this->redirect('schools');
            } else {
                //errors
                $errors = $school->errors;
            }
        }

        $row = $school->where('id', $id);


            $this->view('schools.edit', [
                'row' => $row,
                'errors' => $errors,
            ]);
    }

    public function delete($id = null)
    {
        // code...
        if (!Auth::logged_in()) {
            $this->redirect('login');
        }

        $school = new School();


        if ($id) {

            $school->delete($id);
            $this->redirect('schools');
        }

        $this->view('schools');
    }
}