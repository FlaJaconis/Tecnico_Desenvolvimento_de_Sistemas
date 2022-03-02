<?php
class OutrasFormacoes
{
    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $descricao;

    //ID
    public function setID($id)
    {
        $this->id = $id;
    }
    public function getID()
    {
        return $this->id;
    }
    //idusuario
    public function setIdUsuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }
    public function getIdUsuario()
    {
        return $this->idusuario;
    }
    //inicio
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;
    }
    public function getInicio()
    {
        return $this->inicio;
    }
    //fim
    public function setFim($fim)
    {
        $this->fim = $fim;
    }
    public function getFim()
    {
        return $this->fim;
    }
    //Descrição
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }

    public function inserirBD()
    {
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conexao = $con->conectar();
        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        }
        $sql = "INSERT INTO outrasformacoes (idusuario, inicio, fim, descricao)
 VALUES ('" . $this->idusuario . "','" . $this->inicio . "','" . $this->fim . "','" . $this->descricao . "')";
        if ($conexao->query($sql) === true) {
            $this->id = mysqli_insert_id($conexao);
            $conexao->close();
            return true;
        } else {
            $conexao->close();
            return false;
        }
    }

    public function excluirBD($id)
    {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conexao = $con->conectar();
        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        }
        $sql = "DELETE FROM outrasformacoes WHERE idoutrasformacoes = " . $id . ";
        
        ";

        if ($conexao->query($sql) === true) {

            $conexao->close();
            return true;
        } else {
            $conexao->close();
            return false;
        }
    }
    public function listaFormacoes($idusuario)
    {
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conexao = $con->conectar();
        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        }
        $sql = "SELECT * FROM outrasformacoes WHERE idusuario = '" . $idusuario . "'";
        $re = $conexao->query($sql);
        $conexao->close();
        return $re;
    }
}
