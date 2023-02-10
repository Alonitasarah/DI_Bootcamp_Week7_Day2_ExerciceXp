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
     function myfunction($nbre)
     {
        try {
            
         //Vérifier si l'entrée est un entier valide en utilisant la fonction filter_var
          if (!filter_var($nbre, FILTER_VALIDATE_INT))
            {
         // Lance une exception si l'entrée n'est pas un entier valide.
            throw new Exception("Pas un nombre entier valide");
            }
            
        } catch (Exception $e) 
        {
            // Affichez le message d'erreur si une exception est levée.
            echo "Error: " . $e->getMessage();

        } finally {

            // Afficher un message indiquant que la validation est terminée
            echo "\nValidation Complete";
}
        }    
        // Tester la fonction avec un nombre à virgule flottante
        $number = 2.5;
        myfunction($number);
    ?>
</body>
</html>