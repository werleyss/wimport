<?php

include "header.php";
//$arquivo = $_FILES['arquivo'];
//var_dump($arquivo);
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
//var_dump($arquivo_tmp);

$dados = file($arquivo_tmp);
//var_dump($dados);
echo "<div class='container' >";
$i = 0;

    foreach($dados as $linha){

        $linha = trim($linha);
        $valor = explode(',', $linha);
        //var_dump($valor);
        if(!empty($valor[$i])){
            echo "Nome: <input type='text' value='".$valor[$i]."' class='form-control' disabled/> ";
            $i = $i + 1;
            echo "Profissao: <input type='text' value='".$valor[$i]."' class='form-control'disabled/> ";
            $i = $i + 1;
            echo "Formação: <input type='text' value='".$valor[$i]."' class='form-control'disabled/> ";
            $i = 0;
        }

    }
    echo '</div>';
include"footer.php";
?>