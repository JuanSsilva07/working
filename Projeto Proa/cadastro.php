<?php

//Declaração de variaveis:
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha =$_POST['senha'];

//String de conexão ao banco de dados:
 $strcon = mysqli_connect('localhost','root','root','vidaterrestre');
 if (!$strcon) {
   die('Não foi possível conectar ao MySQL');
 }
 // String de inserção de dados ao Banco de dados:
 $sql = "INSERT INTO tbl_cadastro(nome_usuario, email, senha)
 VALUES ('$nome','$email','$senha')";
 // Executando a declaração no banco de dados:
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao executar a inserção dos dados");
 mysqli_close($strcon);
 header('location: cadastro.html');
?>