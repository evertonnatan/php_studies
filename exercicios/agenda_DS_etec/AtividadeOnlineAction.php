<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda 02</title>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #3799b3;
            font-size: 1.5em;
            font-family: 'JetBrains Mono', monospace;
            color: white;
        }

    </style>
    
</head>
<body>

<h2>Cadastro Confirmado com Sucesso!</h2>    
    
<?php


 $nome = "Nome: ".$_POST['txtNome']."<br>";
 $sobrenome = "Sobrenome: ".$_POST['txtSobrenome']."<br>"; 
 $email = "Email: ".$_POST['txtEmail']."<br>"; 
 $formacao = "Formação: ".$_POST['txtFormacao']."<br>";
 $desc_emp = "Descrição Último Emprego: ".$_POST['txtEmprego']."<br>";

 echo $nome;
 echo $sobrenome;
 echo $email;
 echo $formacao;
 echo $desc_emp;
 

?> 
</body>
</html>

