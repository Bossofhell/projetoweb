<?php session_start(); ?>
<HTML>
<HEAD>
 <TITLE>Teste</TITLE>
</HEAD>
<BODY background="imagens/bg1.jpg">
<?php

if($_SESSION["nome"] == "ok"){
echo "Voc� logou com sucesso! Clique <a href=fazer_logoff.php>aqui</a> para fazer o logoff!";
}
else{
echo "Voc� n�o est� logado! Clique <a href=login.php>aqui</a> para fazer o login!";
}
?>

</BODY>
</HTML>
