<?php
class Users extends Controller
{

    public function __construct()
    {
        //$this->userModel = model('User');
    }
    public function signup()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            //Sanitize Post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Initialize data
            $data = [
                'title' => 'Signup',
                'firstname' => trim($_POST['firstname']),
                'surname' => trim($_POST['surname']),
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'countryCode' => trim($_POST['countryCode']),
                'phone' => trim($_POST['phone']),
                'password' => trim($_POST['password']),
                'repeatPassword' => trim($_POST['repeatPassword']),
                'firstname_error' => '',
                'surname_error' => '',
                'username_error' => '',
                'email_error' => '',
                'phone_error' => '',
                'password_error' => '',
                'repeatPassword_error' => '',
            ];

            // //form validate
            // //password length
            // if (strlen($data['password']) < 8) {
            //     $data['password_error'] = 'Password must be at least 8 characters';
            // }

            // //password match
            // if ($data['password'] != $data['repeatPassword']) {
            //     $data['repeatPassword_error'] = 'Passwords do not match';
            // }

            // //make sure variables in data objects are empty
            // if (empty($data['password_error']) && empty($data['repeatPassword_error'])) {
            //     die('SUCCESS');
            // } else {
            //     $this->view('users/signup', $data);
            // }

            $this->view('users/signup', $data);

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
                'repeatPassword' => '',
                'firstname_error' => '',
                'surname_error' => '',
                'username_error' => '',
                'email_error' => '',
                'phone_error' => '',
                'password_error' => '',
                'repeatPassword_error' => '',
            ];

            $this->view('users/signup', $data);
        }
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //load form
            $data = [
                'title' => 'Login',
                'name' => trim($_POST['name']),
                'password' => trim($_POST['password']),
                'name_error' => '',
                'password_error' => '',
            ];

            // Validate Email
            if (empty($data['name'])) {
                $data['name_error'] = 'Please enter email or name';
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_error'] = 'Please enter password';
            }

            // Make sure errors are empty
            if (empty($data['name_error']) && empty($data['password_error'])) {
                // Validated
                die('SUCCESS');
            } else {
                // Load view with errors
                $this->view('users/login', $data);
            }

        } else {
            //load form
            $data = [
                'title' => 'Login',
                'name' => '',
                'password' => '',
                'name_error' => '',
                'password_error' => '',
            ];

            $this->view('users/login', $data);
        }
    }
}
