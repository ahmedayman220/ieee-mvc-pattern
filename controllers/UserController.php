<?php
require_once '../models/User.php';


class UserController {
    private $user;
    public function __construct($pdo){
        $this->user = new User($pdo);
    }


    // display all data
    public function read() {
        return $this->user->readAll();
    }


    // Add user
    public function create($name, $email) {
        return $this->user->create($name,$email);
    }


    // Edit User
    public function update($id, $name, $email) {
        return $this->user->update($id,$name,$email);
    }


    public function delete($id) {
        return $this->user->delete($id);
    }

}