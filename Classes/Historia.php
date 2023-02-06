<?php

namespace Classes;

use Conexao;


class Historia
{
    private $id;
    private $titulo;
    private $descricao;
    private $imagem;

    private $idHeroi;


    public function getid()
    {
        return $this->id;
    }

    public function setid($id)
    {
        $this->id = $id;
    }
    public function gettitulo()
    {
        return $this->titulo;
    }

    public function settitulo($titulo)
    {
        $this->titulo = $titulo;
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


    public function getidHeroi()
    {
        return $this->idHeroi;
    }

    public function setidHeroi($idHeroi)
    {
        $this->idHeroi = $idHeroi;
    }

 //Cadastra os dados na tabela
    public function cadastrarHistoria($historia)
    {
        $conexao = Conexao::pegarConexao();

        $stmt =  $conexao->prepare("INSERT INTO tbhistoria
                                         (id,titulo,descricao,imagem,idHeroi)
                                         VALUES(?,?,?,?,?)");


        $stmt->bindValue(1, $historia->getid());
        $stmt->bindValue(2, $historia->gettitulo());
        $stmt->bindValue(3, $historia->getdesc());
        $stmt->bindValue(4, $historia->getimagem());
        $stmt->bindValue(5, $historia->getidHeroi());
        $stmt->execute();

        return 'Cadastro realizado com sucesso';
    }

    //Busca todos os dados de acordo com o idHeroi informado
    public function buscaHistoria($id)
    {
        $conexao = Conexao::pegarConexao();

        $querySelect = "SELECT id,titulo,descricao,imagem FROM tbhistoria WHERE idHeroi = $id ";

        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchall();

        return $lista;
    }
 
      //Lista dados que foram consumidos da api, antes de realizar o cadastro
    public function listarDadosHistoria($id,$dados, $historia)
    {

        foreach ($dados as $dado) {
             $historia->setid($dado["id"]);
             $historia->settitulo($dado["title"]);
             $historia->setdesc($dado["description"]);
             $historia->setimagem($dado["thumbnail"]['path'] . '.' . $dado["thumbnail"]['extension']);
             $historia->setidHeroi($id);
            $historia->cadastrarHistoria( $historia);

        }
    }
}
