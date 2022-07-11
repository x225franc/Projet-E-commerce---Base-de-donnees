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

    <table class="panier" border="1">
        <tr class="prodpan">
            <td><img src="haut/1.png" width="50%"></td>
            <td>
                <h2>Description: Haut</h2>
                <h2>Couleur : Noir  Vert  Blanc</h2>
                <h2>Taille: XS  S  M  L  XL  </h2>
                <h2>Prix : 17,99 €</h2>
                <h2>Numero de reference : 21 </h2>
            </td>
        </tr>
        <tr class="prodpan">
            <td><img src="haut/2.png" width="50%"></td>
            <td>
                <h2>Description: Haut</h2>
                <h2>Couleur : Noir  Vert  Blanc</h2>
                <h2>Taille: XS  S  M  L  XL  </h2>
                <h2>Prix : 17,99 €</h2>
                <h2>Numero de reference : 21 </h2>
            </td>
        </tr>
        <tr class="total">
            <td><strong>TOTAL</strong></td>
            <td>35,98</td>
        </tr>
        
    </table>
    <br>
        <a href="comd.php" class="linkcmd">commander</a>
    <?php include "Footer.php"; ?>

</body>
</html>

