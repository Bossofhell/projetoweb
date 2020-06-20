<?php
$rand = rand(10000,99999);
$nome = $_POST['nome'];
$email = $_POST['email'];
$email_lower = strtolower($email);
$email_sha1 = sha1($email_lower);
$email_md5 = md5($email_sha1);
$nome_lower = strtolower($nome);
$nome_sha1 = sha1($nome_lower);
$nome_md5 = md5($nome_sha1);
$dir = "passwords/$nome_lower.php";
$rand_sha1 = sha1($rand);
$rand_md5 = md5($rand_sha1);
include("passwords/$nome_lower.php");

if(file_exists($dir)){
if($nome_md5 == $user){
if($email_md5 == $EMAIL){
$new_pass = $rand_md5;
$temp_pass = $new_pass;
$new_pass = $pass;
$pass = $temp_pass;
$temp_user = $user;
$temp_email = $EMAIL;
$temp_all = "<? \$user = \"$user\"; \$pass = \"$pass\"; \$EMAIL = \"$EMAIL\";";
$fp = fopen($dir, "r+");
fwrite($fp, $temp_all);
echo "Sua nova senha é: $rand";
}
else{
echo "Seu E-Mail está incorreto!";
}
}
else{
echo "Você digitou o usuário incorreto!";
}
}
else{
echo "Desculpa, o arquivo não existe!";
}
?>
