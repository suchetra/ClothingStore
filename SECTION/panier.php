<h1>Votre panier</h1>
    
<?php 
echo "Voici les articles sélectionnés";
echo '<br />';
echo '<br />';

if (isset($_POST['id'])) {
    totalPanier($_POST['id'], $_POST['quantite']);
}

?>
