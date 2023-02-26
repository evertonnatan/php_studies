
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04</title>
    </head>
    <body>
        <?php
        //Aula sobre tipos em PHP https://www.youtube.com/watch?v=DGZS9KrlrjI
            $n = 4;
            $no = "Natan";
            echo $no;
            echo "<br/>";
            
            //Coerção no PHP:
            $texto_inteiro1 = (int) "10Natan"; // nesse caso, o PHP vai imprimir somente a parte inteira da string (porque a parte inteira está no COMEÇO dela)
            echo $texto_inteiro1;
            
             echo "<br/>";
            
            $texto_inteiro2 = (int) "Natan10"; // nesse caso, o PHP vai imprimir "0" (porque a parte inteira NÃO está no começo da string)
            echo $texto_inteiro2;
            
            echo "<br/>";
            
            //Concatenação:
            $nome = "Everton";
            $idade = 31;
            echo $nome. " tem ". $idade. " anos"; // primeira maneira
            echo "<br/>";
            echo "$nome tem $idade anos"; // segunda maneira (as aspas, neste caso, precisam ser duplas)
        ?>
    </body>
</html>