<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "plataforma_cursos";

//criar conexão
$conexao = mysqli_connect( $servidor, $usuario, $senha, $dbname);

if(!$conexao){
    die("Falha na conexão". mysqli_connect_erro())
}else{
    echo "Conexão realizada com sucesso!";
}