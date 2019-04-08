<?php 
$username = "username"; 
$password = "password"; 
$hostname = "endpoint-rds"; 
$dbname = "dbname";

//conexao com o banco de dados
$dbhandle = mysql_connect($hostname, $username, $password) or die("Nao foi possivel conectar ao MySQL"); 
echo "Conectado com susesso ao MySQL atravÃ©s do usuario - $username, senha - $password, host - $hostname<br>"; 
$selected = mysql_select_db("$dbname",$dbhandle)   or die("Nao foi possivel conectar ao MySQL - verifique o usuario e senha e tente novamente."); 
?>
