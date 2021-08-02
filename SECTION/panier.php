<?php
include ('../ASIDE/functions.php');
// require ('../SECTION/catalogue.php');
?>

<h1>Votre panier</h1>
    
<?php 
echo "Voici les articles sélectionnés";
echo '<br/>';
echo '<br/>';


// if (isset($_POST['submit'])) {
//     totalPanier($_POST['id']);
//     // totalPanier();
//     echo 'something';
// }

if (isset($_POST['submit'])) {
    totalPanier($_POST['id']);

    echo 'something';
} else {
    die("Vous n'avez pas sélectionné de produit à ajouter");
}

?>
