<?php

class User
{
    private $database;

    public function __construct()
    {
        $this->database = new Database;
    }

    public function findUserByEmail($email)
    {
        $this->query('SELECT * FROM users where email = :email');

        $this->bind(':email', $email);

        $row = $this->database->single();

        //check row
        if ($this->database->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
