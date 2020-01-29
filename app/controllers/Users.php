<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function signup()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'title' => 'Signup',
                'firstname' => trim($_POST['firstname']),
                'surname' => trim($_POST['surname']),
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['countryCode']) + trim($_POST['phone']),
                'password' => trim($_POST['password']),
                'repeatPassword' => trim($_POST['repeatPassword']),
                'firstname_err' => '',
                'surname_err' => '',
                'username_err' => '',
                'phone_err' => '',
                'email_err' => '',
                'password_err' => '',
                'repeatPassword_err' => '',
            ];

            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            } else {
                // Check email
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken';
                }
            }

            // Validate Name
            if (empty($data['firstname'])) {
                $data['firstname_err'] = 'Please enter firstname';
            }
            if (empty($data['username'])) {
                $data['username_err'] = 'Please enter username';
            }
            if (empty($data['phone'])) {
                $data['phone_err'] = 'Please enter phone number';
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            } elseif (strlen($data['password']) < 8) {
                $data['password_err'] = 'Password must be at least 6 characters';
            }

            // Validate Confirm Password
            if (empty($data['repeatPassword'])) {
                $data['repeatPassword_err'] = 'Please confirm password';
            } else {
                if ($data['password'] != $data['repeatPassword']) {
                    $data['repeatPassword_err'] = 'Passwords do not match';
                }
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['username_err']) && empty($data['password_err']) && empty($data['repeatPassword_err'])) {
                // Validated
                
                 // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Register User
                if($this->userModel->signup($data)){
                    flash('signup success', 'You are registered and can log in');
                    redirect('users/login');
                } else {
                    die('Something went wrong');
                }


            } else {
                // Load view with errors
                $this->view('users/signup', $data);
            }

        } else {
            // Init data
            $data = [
                'title' => 'Signup',
                'firstname' => '',
                'surname' => '',
                'username' => '',
                'email' => '',
                'phone' => '',
                'password' => '',
                'repeatPassword' => '',
                'firstname_err' => '',
                'surname_err' => '',
                'username_err' => '',
                'phone_err' => '',
                'email_err' => '',
                'password_err' => '',
                'repeatPassword_err' => '',
            ];

            // Load view
            $this->view('users/signup', $data);
        }
    }

    public function login()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'title' => 'Login',
                'name' => trim($_POST['name']),
                'password' => trim($_POST['password']),
                'name_err' => '',
                'password_err' => '',
            ];

            // Validate Email
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter a valid email or password';
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter a valid password';
            }

            // Make sure errors are empty
            if (empty($data['name_err']) && empty($data['password_err'])) {
                // Validated
                die('SUCCESS');
            } else {
                // Load view with errors
                $this->view('users/login', $data);
            }

        } else {
            // Init data
            $data = [
                'title' => 'Login',
                'name' => '',
                'password' => '',
                'name_err' => '',
                'password_err' => '',
            ];

            // Load view
            $this->view('users/login', $data);
        }
    }
}
