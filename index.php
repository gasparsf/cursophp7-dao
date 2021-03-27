<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);


// Carrega um usuário
//$root = new Usuario();
//$root->loadbyID(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();  // É static, não precisa instanciar com 'new'
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jo");	
echo json_encode($search);
*/

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "!@#$%123");
echo $usuario;
?>