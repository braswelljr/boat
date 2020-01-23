<?php
class Post
{
    private $database;

    public function __construct()
    {
        $this->database = new Database;
    }

    public function getPosts(){
        $this -> database -> query('SELECT * FROM user WHERE email = "'.$_SESSION["email"].'"');
        return $this -> database -> resultSet();
    }
}
