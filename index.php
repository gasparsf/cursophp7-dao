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


//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "!@#$%123");
echo $usuario;

//Insert de um novo usuario

$aluno = new Usuario("aluno", "@lun0"); //Uso do método construtor

$aluno->insert();

echo $aluno;

// Update

$usuario = new Usuario;

$usuario->loadbyID(7);
$usuario->update("professor", "1234435");

echo $usuario;
*/

//Delete usuario
$usuario = new Usuario;
$usuario->loadbyID(7);
$usuario->delete();
echo $usuario;


?>