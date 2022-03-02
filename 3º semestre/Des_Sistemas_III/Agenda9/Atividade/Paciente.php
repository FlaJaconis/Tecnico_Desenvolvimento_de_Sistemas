<?php
class Paciente
{
    public $nome;
    public $rg;
    public $cpf;
    public $endereco;
    public $profissao;


    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getRg()
    {
        return $this->rg;
    }
    public function setRG($rg)
    {
        $this->rg = $rg;
    }

    public function getCPF()
    {
        return $this->cpf;
    }
    public function setCPF($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getProfissao()
    {
        return $this->profissao;
    }
    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;
    }
}
