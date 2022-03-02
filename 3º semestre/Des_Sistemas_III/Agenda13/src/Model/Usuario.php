<?php

class Usuario
{
    // atributos
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $dataNascimento;
    private $senha;


    // SENHA
    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    //  DATA DE NASCIMENTO
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
        return $this;
    }

    // EMAIL
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    // CPF
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }
    // NOME
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    // ID
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    // METODO PARA INSERIR USUARIO (INSERT)
    public function inserirBD()
    {
        // carregando o arquivo de conexao
        require_once 'ConexaoBD.php';
        // instanciando a classe ConexaoBD
        $con = new ConexaoBD();

        $conexao = $con->conectar();

        if ($conexao->connect_error) {
            die("Connection Failed, algo de errado não está certo");
        }
        //INSERT SQL
        $sql = "INSERT INTO usuario(nome, cpf, email, senha)
                VALUES (
                        '{$this->nome}',
                        '{$this->cpf}',
                        '{$this->email}',
                        '{$this->senha}'
                        )";

        //REALIZA O TESTE DO INSERT
        if ($conexao->query($sql) === true) {
            $this->id = mysqli_insert_id($conexao);
            $conexao->close();
            return 'true';
        } else {
            $conexao->close();
            return false;
        }
    }

    // METODO PARA CARREGAR USUARIO (READ)
    public function carregarUsuario($cpf)
    {
        // carregando o arquivo de conexao
        require_once 'ConexaoBD.php';
        // instanciando a classe ConexaoBD
        $con = new ConexaoBD();
        // objeto para a conexao
        $conexao = $con->conectar();
        if ($conexao->connect_error) {
            die("Connection Failed, algo de errado não está certo");
        }
        $sql = "SELECT * FROM usuario WHERE cpf = '{$cpf}'";

        $re = $conexao->query($sql);
        $r = $re->fetch_object();
        if ($r != null) {
            $this->id = $r->idusuario;
            $this->nome = $r->nome;
            $this->email = $r->email;
            $this->cpf = $r->cpf;
            $this->dataNascimento = $r->dataNasc;
            $this->senha = $r->senha;
            $conexao->close();
            return true;
        } else {
            $conexao->close();
            return false;
        }
    }

    public function atualizarBD()
    {
        require_once 'ConexaoBD.php';
        $con = new ConexaoBD();
        $conexao = $con->conectar();
        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        }

        $sql = "UPDATE usuario SET
                    nome = '{$this->nome}',
                    cpf  = '{$this->cpf}',
                    dataNasc = '{$this->dataNascimento}',
                    email= '{$this->email}'
                WHERE idusuario = '{$this->id}'";

        if ($conexao->query($sql) === true) {
            $conexao->close();
            return true;
        } else {
            $conexao->close();
            return false;
        }
    }
}
