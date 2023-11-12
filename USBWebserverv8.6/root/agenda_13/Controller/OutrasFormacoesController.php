<?php
require_once '../Model/OutrasFormacoes.php';

class OutrasFormacoesController {
    
    public function inserir($inicio, $fim, $descricao, $idusuario) {
        $outrasFormacoes = new OutrasFormacoes();
        $outrasFormacoes->setInicio($inicio);
        $outrasFormacoes->setFim($fim);
        $outrasFormacoes->setDescricao($descricao);
        $outrasFormacoes->setIdUsuario($idusuario);
        $resultado = $outrasFormacoes->inserirBD();
        return $resultado;
    }

    public function remover($id) {
        $outrasFormacoes = new OutrasFormacoes();
        $resultado = $outrasFormacoes->excluirBD($id);
        return $resultado;
    }

    public function gerarLista($idusuario) {
        $outrasFormacoes = new OutrasFormacoes();
        $lista = $outrasFormacoes->listar($idusuario);
        return $lista;
    }
}
?>
