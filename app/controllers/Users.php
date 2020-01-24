<?php
class Users extends Controller
{

    public function __construct()
    {

    }
    public function signup()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
        } else {
            //load form
            $data = [
                'title' => 'Signup',
                'firstname' => '',
                'surname' => '',
                'username' => '',
                'email' => '',
                'phone' => '',
                'password' => '',
                'repeatpassword' => '',
                'firstname_error' => '',
                'surname_error' => '',
                'username_error' => '',
                'email_error' => '',
                'phone_error' => '',
                'password_error' => '',
                'repeatpassword_error' => '',
            ];

            $this->view('users/signup', $data);
        }
    }
    public function login()
    {
        $data = [
            'title' => 'Login',
            'name' => '',
        ];

        $this->view('users/login', $data);
    }
}
