<?php
class Pages extends Controller
{
    public function __construct()
    {
        //$this->postModel = $this->model('Post');
    }
    public function index()
    {
        $data = [
            'title' => 'Boat',
        ];

        //$posts = $this->postModel->getPosts();

        $this->view('pages/index', $data);
    }
}
