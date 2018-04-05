<!DOCTYPE html>
<html>
    <head>
        <title>wimport</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    </head>
    <body>
        <nav class="navbar navbar-default text-center">
            <ul class="list-inline">
                <li>Home</li>
                <li>Sobre</li>
            </ul>
        </nav>
        <div class="container">
            <h1 class="h1">Importação de arquivo para banco de dados</h1> 
            <form method="POST" enctype="multipart/form-data" action="processa.php">
                <div class="form-group">
                    <label class="h4">Arquivo</label>
                    <input type="file" name="arquivo" class="form-control ">
                </div>
                <div class="form-group">
                    <input type="submit" value="Importar" class="btn btn-success">
                </div>
            </form>
        </div>
    </body>
</html>

