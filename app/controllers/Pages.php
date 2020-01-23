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
}
