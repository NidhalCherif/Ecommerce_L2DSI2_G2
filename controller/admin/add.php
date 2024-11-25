<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../connexion.php";
    $sql = "INSERT INTO  produit 
    VALUES (NULL, 'cable vga',1, 200, 'Lorem ipsum 
    dolor sit amet consectetur adipisicing elit. Architecto 
    laboriosam cum possimus quod assumenda
     nihil cupiditate error, repudiandae ipsum neque.',
      'https://picsum.photos/images/200/200', 0)";
    $connexion = new connexion();
    $pdo = $connexion->getConnexion();

    //envoi de la requete sql
    $res = $pdo->exec($sql);
    ?>

</body>

</html>