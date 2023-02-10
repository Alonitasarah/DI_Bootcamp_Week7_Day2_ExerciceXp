<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $nom = htmlspecialchars($_POST["nom"]) ;
     $age = htmlspecialchars($_POST["age"]) ;
     echo "Mon nom est " . $nom . " j'ai " . $age . "ans";
    ?>
    <form action="index.php" method="post">
        <input type = "text" name = "nom" placeholder = "Entrez votre nom">
        <input type = "text" name = "age" placeholder ="Entrez votre age">
        <input type = "submit" value = "Envoyer">
    </form>
</body>
</html>