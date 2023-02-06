<?php

class Conexao{

    public static function pegarConexao(){

        try{

            $conexao = new PDO('mysql:host=localhost;dbname=bdApiMarvel','root','');
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("SET CHARACTER SET utf8");

           return $conexao;
           
        }catch(PDOException $e){
            echo "ERRO =>".$e->getMessage();
        }
    }

} 
 

?>