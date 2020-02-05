<?php
class Face extends Controller
{

    public function __construct()
    {

    }
    public function home()
    {
        $data = [
            'title' => 'home',
            'username' => '',
        ];
        $this->view('face/home', $data);
    }
}
