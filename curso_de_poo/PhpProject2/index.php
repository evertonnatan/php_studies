<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 do Curso de PHP CeV</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta();
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->tampada = true;    
            $c1->destampar();
            
            $c1->rabiscar();
            //var_dump($c1);
            print_r($c1);
            
            echo "<br/>";
            
            $c2 = new Caneta();
            $c2->cor = "Verde";
            $c2->carga = 50;
            $c2->tampar();
            
            print_r($c2);
        ?>
    </body>
</html>
