<?php
    include "model/conexao.php";
    include "model/processa.php";
    include_once "header.php";
    
    
    $c = new Dados;
    
    
    
    
    $tmp_arquivo = ($_FILES["arquivo"]["tmp_name"]) or die("Não foi possível abrir arquivo");
    //var_dump($tmp_arquivo);

    $dados = file($tmp_arquivo);
    //var_dump($dados);
    
?>
<div class="container-fluid">
    <table class="table table-striped">
        <thead class="thead-inverse">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Fantasia</th>
                <th scope="col">CNPJ/CPF</th>
                <th scope="col">IE/RG</th>
                <th scope="col">Endereço</th>
                <th scope="col">Bairro</th>
                <th scope="col">Numero</th>
                <th scope="col">Cidade</th>
                <th scope="col">UF</th>
            </tr>
        </thead>
        <tbody>
<?php 
    $i = 0;
    $j = 0;
    foreach ($dados as $dado){
        $dado      = trim($dado);
        $valor     = explode(',',$dado);
        //var_dump($valor);
        if(!empty($dado)){
                        
           
?>

            <tr>
                <td scope="row"><?php echo  $id         = $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $nome       = $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $fantasia   = $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $cnpj       = $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $ie         = $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $end        = $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $bairro     = $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $numero     = $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $cidade     = $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $uf         = $valor[$i]; $i = 0; ?></td>
                
                
            </tr>

<?php
            $c->addDados($id,$nome,$fantasia,$cnpj,$ie,$end,$bairro,$numero,$cidade,$uf);
        }

    }
    
    
 ?>

        </tbody>
    </table>
    
</div>
<?php 
    include_once "footer.php";

?>