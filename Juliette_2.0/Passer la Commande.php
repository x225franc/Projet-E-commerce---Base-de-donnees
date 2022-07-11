<?php 
$bdd = new PDO('mysql:host=localhost;dbname=Juliette;charset=utf8', 'root', ''); 

?>

<!DOCTYPE html>
<head>
    <!-- changer nom page -->
    <title>PANIER</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "Header.php"; ?>

<h1 style="text-align:center">VOTRE NUMERO DE COMMANDE EST LE : </h1>

    <?php include "Footer.php"; ?>

</body>
</html>

