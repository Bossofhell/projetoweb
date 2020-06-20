<?php
session_start();

if($_SESSION["nome"] == "ok"){
header("Location: logged.php");
}
else{
echo "<h1>Faça o Login:</h1>

<BR><BR>

<form method=POST action=fazer_login.php>
Login:   <input type=text size=20 name=nome>
<BR>
Senha:   <input type=password size=20 name=senha>
<BR>
<input type=submit value=Entrar!></form>";
}
?>
