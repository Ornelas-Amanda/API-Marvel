<?php

use Classes\Herois;
use Classes\Historia;

require_once('./global.php');

//Duas funcoes criadas para consumir a api  

function consumirHeroi($heroi ){
        $curl = curl_init();
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);

        $name = htmlentities(strtolower($heroi));

        $ts = time();
        $public_key = '6ba7279b39cd6851a8809e09c7fedc66';
        $private_key = '4b2a41e6e146dbfbd477accfc14efdd524efa942';
        $hash  = md5($ts.$private_key.$public_key);

        $query =array(
                "name" =>  $name ,
                "orderBy" => "name" ,
                "limit" => "20",
                "apikey" => $public_key,
                "ts" => $ts,
                "hash" => $hash
        );

        $url = 'https://gateway.marvel.com:443/v1/public/characters?'. http_build_query($query);

        curl_setopt($curl, CURLOPT_URL ,$url);

        $result = json_decode(curl_exec($curl),true);

        curl_close($curl);

        $dados = $result["data"]["results"];

        return $dados ;
}

function consumirHistoria($id){
    $curl = curl_init();
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);

        $ts = time();
        $public_key = '6ba7279b39cd6851a8809e09c7fedc66';
        $private_key = '4b2a41e6e146dbfbd477accfc14efdd524efa942';
        $hash  = md5($ts.$private_key.$public_key);

        $query =array(
                "orderBy" => "title" ,
                "limit" => "5",
                "apikey" => $public_key,
                "ts" => $ts,
                "hash" => $hash
        );

        $id = htmlentities($id);

        $url = 'https://gateway.marvel.com:443/v1/public/characters/'.$id.'/comics?'. http_build_query($query);

        curl_setopt($curl, CURLOPT_URL ,$url);

        $result = json_decode(curl_exec($curl),true);

        curl_close($curl);

        $dados = $result["data"]["results"];
        
        return $dados ;
}


//se request['heroi'] existir, caira na condição
if(isset($_REQUEST['heroi'])){   
    //consome a api para o trazer informacoes do personagem     
    $dadosHeroi = consumirHeroi($_REQUEST['heroi'] );
    //atribui o valor do id a variavel $id
    $id = $dadosHeroi[0]['id'];
    $heroi = new Herois();

     //se o id exstir e o elemento buscado nao existir no banco entrara an condição
    if(isset($id) && (in_array($id,$heroi->buscaID($id)) == false)){
        //São listados os personagens
        $heroi->listarDados($dadosHeroi,$heroi);
        //consome a api para o trazer informacoes das comics do personagem  
        $dadosHistoria = consumirHistoria($id);
        $historia = new Historia();
        //São listados as comics daquele personagem
        $historia->listarDadosHistoria($id,$dadosHistoria,$historia);
    }

    header('Location: ../app/index.php');
 }
 
   
   

 

?>

