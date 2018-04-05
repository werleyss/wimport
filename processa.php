<?php

//$arquivo = $_FILES['arquivo'];
//var_dump($arquivo);
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
//var_dump($arquivo_tmp);

$dados = file($arquivo_tmp);
//var_dump($dados);

$i = 0;

foreach($dados as $linha){
    
    $linha = trim($linha);
    $valor = explode(',', $linha);
    //var_dump($valor);
    if(!empty($valor[$i])){
        echo "Nome: ".$valor[$i]."<br>";
        $i = $i + 1;
        echo "Profissao: ".$valor[$i]."<br>";
        $i = $i + 1;
        echo "Experiencia: ".$valor[$i]."<br><br>";
        $i = 0;
    }
    
    
}

?>