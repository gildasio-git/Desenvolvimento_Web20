<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
        <?php
            /*
                VALINDANDO INFORMAÇÕES
                Via POST.

                Funções: ISSET  - Verifica se foi passado valor no POST
            */ 
        
            if(isset($_POST['acao'])){
                echo 'Post: ' .$_POST['nome'];
                echo 'Conteúdo: '   .$_POST['conteudo'];

            }else if(isset($_GET['nome'])){
                echo 'Get ' .$_GET['nome'];
            }
        ?>

    <form action="" method="POST">
        <input type="text" name="nome">
        <input type="submit" name="acao" value="Enviar">

         <!-- outros tipos de INPUTS-->
         <input type="hidden" name="chave" value="1234566">

         <textarea name="conteudo">
            
         </textarea>
    </form>
    
</body>
</html>