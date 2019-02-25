<?php

class User extends Controller {

    public function __construct()
    {
        die('ja');
        parent::__construct();

        $this->registration_model = new Registration_model;
        $this->login_model = new Login_model;
        $this->logout_model = new Logout_model;
        $this->manage_model = new Manage_model;
    }

    public function registration()
    {
        die('bla');
    }

    public function login()
    {

    }

    public function logout()
    {

    }

    public function manage()
    {

    }

}