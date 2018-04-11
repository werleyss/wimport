<?php
     include_once "header.php";;
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
    foreach ($dados as $dado){
        $dado      = trim($dado);
        $valor     = explode(',',$dado);
        //var_dump($valor);
        if(!empty($dado)){
                        
           
?>

            <tr>
                <td scope="row"><?php echo  $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row" ><?php echo  $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $valor[$i]; $i = $i + 1; ?></td>
                <td scope="row"><?php echo  $valor[$i]; $i = 0; ?></td>
                
                
            </tr>

<?php
            
        }

    }
    
 ?>

        </tbody>
    </table>
    
</div>
<?php 
    include_once "footer.php";

?>