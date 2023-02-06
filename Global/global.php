<?php 
 spl_autoload_register('carregarClasse');
 
function carregarClasse($nomeClasse){
    if(file_exists('../Classes/'.$nomeClasse.'.php')){
        require_once('../Classes/'.$nomeClasse.'.php');
    }
}


carregarClasse('Herois');
carregarClasse('Historia');

    
?>
