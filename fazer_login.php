<?php
session_start();
$nome = $_POST["nome"];
$senha = $_POST["senha"];
include("passwords/$nome.php");
$nome_lower = strtolower($nome);
$nome_sha1 = sha1($nome_lower);
$nome_md5 = md5($nome_sha1);
$senha_lower = strtolower($senha);
$senha_sha1 = sha1($senha_lower);
$senha_md5 = md5($senha_sha1);
if ($nome_md5 == $user) {
if ($senha_md5 == $pass){
    $_SESSION["nome"] = "ok";
header("location: fullcalendar.html");
}
else{
echo "Senha incorreta! Para voltar para a pagina de login, clique <a href=redir.php?id=$index&name=enter>aqui</a>.";
}
}
else{
echo "Usuario incorreto! Para voltar para a pagina de login, clique <a href=redir.php?id=$index&name=enter>aqui</a>.";
}
?>
