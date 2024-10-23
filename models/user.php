<?php
 
require_once 'models/database.php';
 
class user
{
    public static function FindByEmail($email){
        $conn = Database::getComnction();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->Fetch(PDO::FETCH_ASSOC);
    }
 
    public static function Find($id){
        $conn = Database::getComnction();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->Fetch(PDO::FETCH_ASSOC);
    }
 
    static public function create($data){
        $conn = Database::getComnction();
        $stmt = $conn->prepare("INSERT INTO usuarios(nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        $stmt->execute($data) ;
   
    }
 
    //Função para buscar todos os usuários da base de dados
    public static function all(){
        $conn = Database::getComnction();
        $stmt = $conn->query("SELECT * FROM usuarios");
        //Retorna todos os usuarios com um array associativo
        return $stmt->FetchAll(PDO::FETCH_ASSOC);
    }
 
    //Função responsavel pela atualização dos dados dos usuários na base de dados
    public static function update($id, $data){
        //Prepara uma consulta SQL para atualizar, nome, email e perfil com base no ID do usuario
        $conn = Database::getComnction();
        $stmt = $conn->prepare("UPDATE usuarios SET nome = :nome, email = :email, perfil = :perfil WHERE id = :id");
 
        $data['id'] = $id;
 
        $stmt->execute($data);
 
    }

    public static function delete ($id){
        $conn = Database::getComnction();
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

}
?>

