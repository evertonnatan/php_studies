<body>

<h2>Agenda 09 - Desenvolvimento de Sistemas III</h2>
<h3>Aluno: Everton Natã Diniz Lima</h3>
    
<?php

        include_once 'Paciente.php';
        $p = new Paciente();
        $p->setNome('Kratos');
        $p->setRg("00.000.000-0");
        $p->setCpf("999.999.999-99");
        $p->setEndereco("Rua do Olimpo, 66, Grécia");
        $p->setProfissao("Matador de deuses");
        echo 'Nome: '.$p->getNome().'<br>';
        echo 'RG: '.$p->getRg().'<br>';
        echo 'CPF: '.$p->getCpf().'<br>';
        echo 'Endereço: '.$p->getEndereco().'<br>';
        echo 'Profissão: '.$p->getProfissao().'<br>';
?>

</body>

