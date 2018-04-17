<?php 
    include "model/conexao.php";
    include "model/processa.php";
    include "controller/controller.php";
    include_once "header.php";

    $c = new Controller;
    $c->index();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>
        
        <div class="container">
            <h3 >Importação de arquivo para banco de dados</h3> 
            <form method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label class="h4">Arquivo</label>
                    <input type="file" name="arquivo" class="form-control ">
                </div>
                <div class="form-group">
                    <input type="submit" value="Importar" name="importar" class="btn btn-success" >
                </div>
            </form>
            <hr/>
            <?php   if($c->conIndex) echo "<h3 class='cadastro'> ".$c->conIndex."</h3>";
                    elseif($c->conIndext) echo "<h3 class='cadastro'> ".$c->conIndext." linhas inseridas!</h3>";
            ?>
        </div>

<?php   include_once "footer.php";?>

