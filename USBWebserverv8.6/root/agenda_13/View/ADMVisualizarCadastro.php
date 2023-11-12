<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once '../Model/Usuario.php';
include_once '../Controller/UsuarioController.php';
if (!isset($_SESSION)) {
    session_start();
}

// Verificando se um ID de usuário foi passado na URL
if (isset($_GET['id'])) {
    $idUsuario = $_GET['id'];

    // Recuperando as informações do usuário pelo ID
    $usuarioController = new UsuarioController();
    $usuario = $usuarioController->obterUsuarioPorID($idUsuario);
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
    <title>Visualizar Cadastro</title>
</head>

<body>
    <header class="w3-container w3-padding-32 w3-center">
        <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
            Detalhes do Cadastro
        </h1>
    </header>
    <div class="w3-padding-128 w3-content w3-text-grey">
        <div class="w3-container">
            <p><strong>Código:</strong> <?php echo $usuario->getID(); ?></p>
            <p><strong>Nome:</strong> <?php echo $usuario->getNome(); ?></p>
            <p><strong>CPF:</strong> <?php echo $usuario->getCPF(); ?></p>
            <p><strong>Email:</strong> <?php echo $usuario->getEmail(); ?></p>
            <p><strong>Data de Nascimento:</strong> <?php echo $usuario->getDataNascimento(); ?></p>
            <!-- Adicione mais campos conforme necessário -->
        </div>
    </div>
    <form action="/ADMListarCadastrados.php" class="w3-container w3-light-grey w3-text-blue w3-margin w3-center" style="width: 30%;">
        <div class="w3-row w3-section">
            <div>
                <button class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">
                    Voltar
                </button>
            </div>
        </div>
    </form>
</body>

</html>
