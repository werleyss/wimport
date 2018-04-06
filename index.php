<?php include_once "header.php";?>
        
        <div class="container">
            <h1 class="h1">Importação de arquivo para banco de dados</h1> 
            <form method="POST" enctype="multipart/form-data" action="processa.php">
                <div class="form-group">
                    <label class="h4">Arquivo</label>
                    <input type="file" name="arquivo" class="form-control ">
                </div>
                <div class="form-group">
                    <input type="submit" value="Importar" class="btn btn-success" >
                </div>
            </form>
        </div>
<?php include_once "footer.php";?>

