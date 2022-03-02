<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
class FormacaoAcadController{
    
    public function inserir($inicio, $fim, $descricao,$idusuario) {
        require_once '../Model/FormacaoAcad.php';
        $formacao = new FormacaoAcad();
        $formacao->setInicio($inicio);
        $formacao->setFim($fim);
        $formacao->setDescricao($descricao); 
        $formacao->setIdUsuario($idusuario);    
        $r = $formacao->inserirBD();
   
        return $r;     
    }
    public function remover($id) {
        require_once '../Model/FormacaoAcad.php';
        $formacao = new FormacaoAcad();
        $r = $formacao->excluirBD($id);
        return $r;     
    }
    public function gerarLista($idusuario)
    {
        require_once '../Model/FormacaoAcad.php';
        $formacao = new FormacaoAcad();
        
        return $results = $formacao->listaFormacoes($idusuario);
    }
}
?>