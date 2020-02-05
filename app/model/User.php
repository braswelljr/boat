<?php

class User
{
    private $database;

    public function __construct()
    {
        $this->database = new Database;
    }

    // Regsiter user
    public function signup($data)
    {
        $this->database->query('INSERT INTO users (firstname, surname, username, email, phone, password) VALUES(:firstname, :surname, :username, :email, :phone, :password)');

        // Bind values
        $this->database->bind(':firstname', $data['firstname']);
        $this->database->bind(':surname', $data['surname']);
        $this->database->bind(':username', $data['username']);
        $this->database->bind(':email', $data['email']);
        $this->database->bind(':phone', $data['phone']);
        $this->database->bind(':password', $data['password']);

        // Execute
        if ($this->database->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Login User
    public function login($data, $password)
    {
        $this->database->query('SELECT * FROM users WHERE email = :email OR username = :usename');
        $this->database->bind(':email', $data);
        $this->database->bind(':usename',$data);

        $row = $this->database->single();

        $hashedPassword = $row->password;
        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    // Find user by email
    public function findUserByEmail($email)
    {
        $db = $this->database->query('SELECT * FROM users WHERE email = :email');
        // Bind value
        $this->database->bind(':email', $email);

        $row = $this->database->single();

        // Check row
        if ($this->database->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

     // Find user by username
     public function findUserByUsername($username)
     {
         $db = $this->database->query('SELECT * FROM users WHERE username = :username');
         // Bind value
         $this->database->bind(':username', $username);
 
         $row = $this->database->single();
 
         // Check row
         if ($this->database->rowCount() > 0) {
             return true;
         } else {
             return false;
         }
     }
}
