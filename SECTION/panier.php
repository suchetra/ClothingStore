<?php
include ('../ASIDE/functions.php');
?>

<h1>Votre panier</h1>
    
<?php 
echo "Voici les articles sélectionnés";

if (isset($_POST['nom'])) {
    totalPanier();
    echo 'something';
}

?>
