<?php

require_once 'models/database.php';

class user
{
    public static function FindByEmail($email){
        $comn = Database::getComnction();
        $stmt = $comn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->Fetch(PDO::FETCH_ASSOC);
    }

    public static function Find($id){
        $comn = Database::getComnction();
        $stmt = $comn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->Fetch(PDO::FETCH_ASSOC);
    }

    static public function create($data){
        $comn = Database::getComnction();
        $stmt = $comn->prepare("INSERT INTO usuarios(nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        $stmt->execute($data);
    
    }
}