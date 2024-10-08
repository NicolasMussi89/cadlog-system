<?php

class DashboardController
{
    // função index, responssavel por exibir a pagina
    public function index()
    {

    // função que vai iniciar a sessão pra varificar se o usuario esta autentica
    session_start();

    if(!isset($_SESSION['usuario_id'])){
        // redireciona o usuario para a pagina inicial
        header('locatio: index.php');
        exit; // garante que o script seja interrompido
    }
    
    include 'views/dashboard.php';
    }
}
?>