<?php
class Pages extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data = [
            'title' => 'Boat',
        ];

        $this->view('pages/index', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
        ];

        $this->view('pages/login', $data);
    }

    public function signup()
    {
        $data = [
            'title' => 'Signup',
        ];

        $this->view('pages/signup', $data);
    }
}
