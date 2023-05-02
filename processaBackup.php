<?php
/*
// Report all PHP errors
//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors', 1);

//include_once("conexao.php");
require("conexao.php");

/*
$UsuarioNome   = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$UsuarioEmail  = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
*/
/*
$UsuarioNome   = $_POST['nome'];
$UsuarioEmail  = $_POST['email'];
$UsuarioTelefone  = $_POST['telefone']; 
$UsuarioMensagem  = $_POST['mensagem'];
*/
//echo "Nome: $nome <br>";
//echo "Email: $email <br>";

////////////////////////////////////////
/*
$qUsuario = "   INSERT INTO ajuda (nome, email, telefone, mensagem, created) 
                VALUES('$UsuarioNome','$UsuarioEmail', '$UsuarioTelefone','$UsuarioMensagem', NOW())";

if (!($rUsuario = mysqli_query($conn, $qUsuario))){
    print "Erro ao executar cadastro;";
} else {
    $UsuarioID = mysqli_insert_id($conn);
    print "Cadastro realizado com sucesso!";
    print "<br><br>";
    print "<br>Nome: ".$UsuarioNome;
    print "<br>E-mail: ".$UsuarioEmail;
    print "<br>ID: ".$UsuarioID;
}
*/
//////////////////////////////////////////////////
/*
if($UsuarioID = mysqli_insert_id($conn)) {
print "OK insert";

}else{
print "Erro insert";
}
*/