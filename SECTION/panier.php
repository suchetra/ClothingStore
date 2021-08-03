<h1>Votre panier</h1>
    
<?php 
echo "Voici les articles sélectionnés";
echo '<br />';
echo '<br />';



if (isset($_POST['checkbox'])) {
    foreach($_POST['checkbox'] as $produit){
        // totalPanier($_POST['id'], $_POST['quantite']);
        echo $produit;
    }
}

?>
