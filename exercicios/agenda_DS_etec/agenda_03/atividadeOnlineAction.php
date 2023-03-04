<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Madeira e Cia Ltda</title>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300&display=swap" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #3799b3;
            font-size: 1em;
            font-family: 'JetBrains Mono', monospace;
            color: white;
            margin-left: 1em;
        }

    </style>
</head>
<body>
    <?php
    
    $nome = $_POST['txtNome'];
    $valorCompra = $_POST['txtValorCompra'];
    $pagamento = $_POST['cmbPag'];
    $desconto = 0;
    
    if ($pagamento == 'deposito') {
        $desconto = 0.1;
        
    } elseif ($pagamento == 'boleto') {
    $desconto = 0.08;
    
    } 
    
    $valorDescontado = $valorCompra * $desconto;
    $valorFinal = $valorCompra - $valorDescontado;
    
    echo "PROMOÇÃO DE MÊS DE ANIVERSÁRIO!";
    echo "<br>";
    echo "$nome!";
    echo "<br>";    
    echo "Valor da Compra Sem Desconto: R$" . number_format($valorCompra, 2, ',', '.');
    echo "<br>";
    
    if ($pagamento == 'deposito') {
        echo 'Forma de pagamento: Depósito';        
    } elseif ($pagamento == 'boleto') {
        echo 'Forma de pagamento: Boleto';
    } else {
        echo 'Forma de pagamento: Cartão de Crédito';       
    }   
    
    echo "<br>";
    echo "Desconto de: " . ($desconto * 100) . "%";
    echo "<br>";
    echo "Você economizou: R$".($valorCompra - $valorFinal);
    echo "<br>";
    echo "Valor a pagar: R$" . number_format($valorFinal, 2, ',', '.');
    
    ?>


</body>
</html>
