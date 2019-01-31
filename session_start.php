<?php  
session_start();

//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( ($_SESSION['logado'] == False) ) {
  //Destrói
  session_destroy();

  //Limpa
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  
  //Redireciona para a página de autenticação
  header('location:login.php');
}
?>