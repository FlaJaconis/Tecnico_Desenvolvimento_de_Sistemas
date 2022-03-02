<?php
class ExpProfissional
{
    private $id;
    private $idusuario;
    private $inicio;
    private $fim;
    private $empresa;
    private $descricao;

    public function setId($entraId)
    {
        $this->id = $entraId;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setIdUsuario($entraId)
    {
        $this->idusuario = $entraId;
    }
    public function getIdUsuario()
    {
        return $this->idusuario;
    }

    public function setInicio($entraData)
    {
        $this->inicio = $entraData;
    }
    public function getInicio()
    {
        return $this->inicio;
    }

    public function setFim($entraData)
    {
        $this->fim = $entraData;
    }
    public function getFim()
    {
        return $this->fim;
    }

    public function setEmpresa($entraEmpresa)
    {
        $this->empresa = $entraEmpresa;
    }
    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function setDescricao($entraDescricao)
    {
        $this->descricao = $entraDescricao;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }

    //Descrição
    public function inserirBD()
    {
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO experienciaprofissional (idusuario, inicio, fim, empresa, descricao) 
 VALUES ('" . $this->idusuario . "','" . $this->inicio . "','" . $this->fim . "','" . $this->empresa . "','" . $this->descricao . "')";

        if ($conn->query($sql) === true) {
            $this->id = mysqli_insert_id($conn);
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }

    public function excluirBD($id)
    {
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "DELETE FROM experienciaprofissional WHERE idexperienciaprofissional = '" . $id . "';";

        if ($conn->query($sql) === true) {

            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }

    public function listaExperiencias($idusuario)
    {
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM experienciaProfissional WHERE idusuario = '" . $idusuario . "'";
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }
}
