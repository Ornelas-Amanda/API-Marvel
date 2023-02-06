<?php

namespace Classes;

use Conexao;


class Herois
{
    private $id;
    private $nome;
    private $descricao;
    private $imagem;


    public function getid()
    {
        return $this->id;
    }

    public function setid($id)
    {
        $this->id = $id;
    }
    public function getnome()
    {
        return $this->nome;
    }

    public function setnome($nome)
    {
        $this->nome = $nome;
    }

    public function getdesc()
    {
        return $this->descricao;
    }

    public function setdesc($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getimagem()
    {
        return $this->imagem;
    }

    public function setimagem($imagem)
    {
        $this->imagem = $imagem;
    }

    //Cadastro de heroi 
    public function cadastrarHeroi($heroi)
    {
        $conexao = Conexao::pegarConexao();

        $stmt =  $conexao->prepare("INSERT INTO tbherois
                                         (id,nome,descricao,imagem)
                                         VALUES(?,?,?,?)");

        $stmt->bindValue(1, $heroi->getid());
        $stmt->bindValue(2, $heroi->getnome());
        $stmt->bindValue(3, $heroi->getdesc());
        $stmt->bindValue(4, $heroi->getimagem());
        $stmt->execute();

        return 'Cadastro realizado com sucesso';
    }

    //Busca id especifico na tabela de herois
    public function buscaID($id)
    {
       
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT id FROM tbherois WHERE id = {$id}";

        $resultado = $conexao->query($querySelect);
        
        $lista = $resultado->fetchAll();

        return $lista;
    }

    //Busca todos os dados da tabela
    public function buscaHeroi()
    {
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT id,nome,descricao,imagem FROM tbherois ";

        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchall();

        return $lista;
    }

    //Lista dados que foram consumidos da api, antes de realizar o cadastro
    public function listarDados($dados, $heroi)
    {

        foreach ($dados as $dado) {
            $heroi->setid($dado["id"]);
            $heroi->setnome($dado["name"]);
            $heroi->setdesc($dado["description"]);
            $heroi->setimagem($dado["thumbnail"]['path'] . '.' . $dado["thumbnail"]['extension']);

            $heroi->cadastrarHeroi($heroi);

           
        }
    }
}
