<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - ENVIANDO ARQUIVOS </title>
</head>
<body>
        <?php
            /*
                ENVIANDO ARQUIVOS
                Funções: ISSET  - Verifica se foi passado valor no POST
            */ 
        
            if(isset($_POST['acao'])){
               echo $_FILES['arquivo']['name'];
            }
        ?>

    <form enctype="multipart/form-data" action="" method="POST">
        <input type="file" name="arquivo">
        <input type="submit" name="acao" value="Enviar">
    </form>
    
</body>
</html>