<!DOCTYPE html>
<?php
 if(!isset($_SESSION))
 {
 session_start();
 }
 include_once '../Model/Usuario.php';
 include_once '../Controller/UsuarioController.php';
 if(!isset($_SESSION)) 
 { 
 session_start(); 
 }
?>



<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="Viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Usuários Cadastrados</title>
</head>

<body>
    <header class="w3-container w3-padding-32 w3-center ">
        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
            Lista de Usuários Cadastrados no Sistema
        </h1>
    </header>
    <div class="w3-padding-128 w3-content w3-text-grey">
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                    <tr class="w3-center w3-blue">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Visualizar Detalhes</th>
                    </tr>
                    <thead>
                    <tbody>
                    <?php
                    
                    //Botão solicitado na agenda 14 (com a função de redirecionar o administrador a uma página com todas as informações de cada usuário)
                    foreach ($usuarios as $usuario) {
                        echo "<tr>";
                        echo "<td>{$usuario->getID()}</td>";
                        echo "<td>{$usuario->getNome()}</td>";
                        echo "<td><a href=\"/ADMVisualizarCadastro.php?id={$usuario->getID()}\" class=\"w3-button w3-blue\">Visualizar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <form action="/Controller/Navegacao.php" method="post" class="w3-container w3-light-grey w3-text-blue w3-margin w3-center" style="width: 30%;">
        <div class="w3-row w3-section">
            <div>
                <button name="btnVoltar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">
                    Voltar
                </button>
            </div>
        </div>
    </form>
    </div>

</body>

</html>