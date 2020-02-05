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
        $this->db->query('INSERT INTO users (firstname, surname, username, email, phone, password) VALUES(:firstname, :surname, :username, :email, :phone,:password)');
        // Bind values
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':surname', $data['surname']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':password', $data['password']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Login User
    public function login($name, $password)
    {
        $this->db->query('SELECT * FROM users WHERE name = :name');
        $this->db->bind(':name', $name);

        $row = $this->db->single();

        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    // Find user by email
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
