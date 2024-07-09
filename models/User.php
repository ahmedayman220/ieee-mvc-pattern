<?php
require_once '../config/database.php';

class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    public function create($name, $email){
        $q = $this->pdo->prepare("INSERT INTO `users`(`name`, `email`) VALUES (:name,:email);");
        return $q->execute([
            'name' => $name,
            'email' => $email
        ]);
    }

    public function read($id){
        $q = $this->pdo->prepare('SELECT * FROM users WHERE id= :id');
        return $q->execute([
            'id' => $id
        ])->fetch();
    }

    public function readAll(){
        $q = $this->pdo->prepare('SELECT * FROM users');
        return $q->execute()->fetch();
    }

    public function update($id,$name,$email){
        $q = $this->pdo->prepare("UPDATE `users` SET `name`=:name,`email`=:email WHERE id= :id");
        return $q->execute([
            'id' => $id,
            'name' => $name,
            'email' => $email
        ]);

    }


    public function delete($id){
        $q = $this->pdo->prepare("DELETE FROM `users` WHERE id=:id");
        $q->execute([
            'id' => $id,
        ]);

    }


    public function tetetetetetetetete() {
        //
    }

}