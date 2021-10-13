<?php 

require_once("config.php");
//carrega um usuario
/*$root = new Usuario();

$root->loadById(3);

echo $root;*/

//Carrega uma lista de usuarios
/*$lista = Usuario::getList();

echo json_encode($lista);*/

//Carrega uma lista de usuarios buscandoo pelo login
/*$search = Usuario::search("jo");

echo json_encode($search);*/

//carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("root", "!@#$");

echo $usuario;

/*$sql= new Sql();

$sql->select("SELECT *  FROM tb_usuarios");

echo json_encode($usuarios);*/

 ?>