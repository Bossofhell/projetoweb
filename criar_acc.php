<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$e_mail = $_POST["e_mail"];
$confirmar_senha = $_POST["confirmar_senha"];
$php_entrace = '<?php ';
$nome_user = '$user = "';
$nome_lower = strtolower($nome);
$nome_sha1 = sha1($nome_lower);
$nome_md5 = md5($nome_sha1);
$senha_pass = '"; $pass = "';
$senha_lower = strtolower($senha);
$senha_sha1 = sha1($senha_lower);
$senha_md5 = md5($senha_sha1);
$email = '"; $EMAIL = "';
$email_lower = strtolower($e_mail);
$email_sha1 = sha1($email_lower);
$email_md5 = md5($email_sha1);
$php_exit = '"; ?>';
$nome_file = "passwords/$nome_lower.php";

if(file_exists($nome_file)){
echo "Desculpe, ja existe esse usuario!";
}
elseif(empty($nome) or strstr($nome, ' ') or strstr($nome, '!') or strstr($nome, '@') or strstr($nome, '#') or strstr($nome, '$') or strstr($nome, '%') or strstr($nome, '¨') or strstr($nome, '&') or strstr($nome, '*') or strstr($nome, '(') or strstr($nome, ')') or strstr($nome, '_') or strstr($nome, '+') or strstr($nome, '}') or strstr($nome, '{') or strstr($nome, '?') or strstr($nome, '`') or strstr($nome, '^') or strstr($nome, ':') or strstr($nome, '<') or strstr($nome, '>') or strstr($nome, '|') or strstr($nome, '"') or strstr($nome, "'") or strstr($nome, '1') or strstr($nome, '2') or strstr($nome, '3') or strstr($nome, '4') or strstr($nome, '5') or strstr($nome, '6') or strstr($nome, '7') or strstr($nome, '8') or strstr($nome, '9') or strstr($nome, '0') or strstr($nome, '-') or strstr($nome, '=') or strstr($nome, ']') or strstr($nome, '[') or strstr($nome, '/') or strstr($nome, '´') or strstr($nome, '~') or strstr($nome, ';') or strstr($nome, '.') or strstr($nome, ',') or strstr($nome, '\\') or strstr($nome, '¹') or strstr($nome, '²') or strstr($nome, '³') or strstr($nome, '£') or strstr($nome, '¢')
 or strstr($nome, '¬') or strstr($nome, 'ª') or strstr($nome, '°') or strstr($nome, 'º') or strstr($nome, '§')){
echo "Por favor, digite um nome valido!";
}
elseif(empty($senha) or strstr($senha, ' ')){
echo "Por favor, digite uma senha valida!";
}
elseif($senha != $confirmar_senha){
echo "Voce digitou a senha errada, por favor, redigite sua senha!";
}
elseif($senha == $nome){
echo "Sua senha nao pode ser igual à seu login. Por favor, redigite sua senha ou seu login.";
}
elseif(!strstr($e_mail, '@')){
echo "Por favor, digite um e-mail valido!";
}
else{
$fp = fopen($nome_file, 'a');
fwrite($fp, $php_entrace);
fwrite($fp, $nome_user);
fwrite($fp, $nome_md5);
fwrite($fp, $senha_pass);
fwrite($fp, $senha_md5);
fwrite($fp, $email);
fwrite($fp, $email_md5);
fwrite($fp, $php_exit);
echo "Usuario criado com sucesso! Para fazer o login, clique <a href=login.html>aqui</a>.";
}
?>
