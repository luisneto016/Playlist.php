<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie sua playlist</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1> Criador de playlist </h1>
    <p> <strong> Crie sua playlist rápido e fácil </strong> </p>
    <h3> 
        <?php
            if(isset($_SESSION["mensagem"])){
                echo $_SESSION["mensagem"];
                unset($_SESSION["mensagem"]);
            } else{
                echo "&nbsp";
            } 
            
            if(isset($_SESSION["playlista"])){
                $playlista = $_SESSION["playlista"];
            } else {
                $playlista = "";
            }
        ?>
    </h3>

    <form action = "dadosplaylist.php" method = "POST">
    <table>

        <tr>
            <td><label for="">Nome da playlist: </label></td>
            <td><input type="text" name = "playlista" value ="<?php echo "$playlista" ?>"></td>
        </tr>

    </table>
    
    <a href="dadosplaylist.php"><input type="submit" class="button"></a>

    </form>
</body>
</html>