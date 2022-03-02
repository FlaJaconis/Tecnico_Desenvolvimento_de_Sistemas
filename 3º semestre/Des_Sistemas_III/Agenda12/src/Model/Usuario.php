<?php
class Usuario
{
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $dataNascimento;
    private $senha;

    public function setID($entraId)
    {
        $this->id = $entraId;
    }

    public function getID()
    {
        return $this->id;
    }

    //nome
    public function setNome($entraNome)
    {
        $this->nome = $entraNome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    
    //cpf
    public function setCPF($entraCpf)
    {
        $this->cpf = $entraCpf;
    }
    public function getCPF()
    {
        return $this->cpf;
    }

    //Email
    public function setEmail($entraEmail)
    {
        $this->email = $entraEmail;
    }
    public function getEmail()
    {
        return $this->email;
    }
    //Data de nascimento
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }
    // Senha
    public function setSenha($entraSenha)
    {
        $this->senha = $entraSenha;
    }
    public function getSenha()
    {
        return $this->senha;
    }

    //método para requerer conexão com o banco de dados e cadastrar usuário
    public function inserirBD()
    {
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO usuario (nome, cpf, email, senha) VALUES ('" . $this->nome . "', 
        '" . $this->cpf . "', '" . $this->email . "','" . $this->senha . "')";

        if ($conn->query($sql) === true) {
            $this->id = mysqli_insert_id($conn);
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }

    public function carregarUsuario($cpf)
    {
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM usuario WHERE cpf = " . $cpf;
        $re = $conn->query($sql);
        $r = $re->fetch_object();
        if ($r != null) {
            $this->id = $r->idusuario;
            $this->nome = $r->nome;
            $this->email = $r->email;
            $this->cpf = $r->cpf;
            $this->dataNascimento = $r->dataNascimento;
            $this->senha = $r->senha;
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }
    public function atualizarBD(){
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE usuario SET nome = '" . $this->nome . "', cpf = '" . $this->cpf . 
        "', dataNascimento = '" . $this->dataNascimento . "', email='" . $this->email . 
        "' WHERE idusuario ='" . $this->id . "'";
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return TRUE;
        } else {
            $conn->close();
            return FALSE;
        }
    }
}
