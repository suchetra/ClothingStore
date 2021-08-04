<h1>Votre panier</h1>
    
<p>Voici les articles sélectionnés :</p>
<br /><br />
<?php 

// on verifie que l'input quantite (qui envoie quantite par $post) a bien ete recu.
if (isset($_POST['quantite'])) {
    // si elle a ete envoyer alors la variable $quantitep devien la valeurs recu 
    $quantiteP = $_POST['quantite'];
} else {
    // sinon la quantite = 1 de bases
    $quantiteP = 0;
}
?>

<?php 

if(isset($_POST['modifQuantite'])){
    modifQuantite($_POST['id'],$quantiteP, true);
}

if(isset($_POST['valider'])){
    modifQuantite($_POST['id'],$quantiteP, false);
}



// if(isset($_POST['active'])) {
//     $_SESSION['panier'][] = ['id' => $_POST['id'], 'quantite' => $_POST['quantite']]; 
// } 
// if(isset($_POST['modifQte'])){
//     modifQuantite($_POST['id'],$_POST['quantite']);
// }
elseif(isset($_POST['effacer']) and isset($_SESSION['panier']) ) {
// elseif($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['effacer']) and isset($_SESSION['panier']) ) {
        viderPanier($_SESSION['panier']);
        echo "Votre panier est vide";
}

if(isset($_SESSION['panier'])) {
    

    foreach($_SESSION['panier'] as $panier){
        totalPanier($panier['id'], $panier['quantite']); 
        // modifQ ($panier['id'], $panier['quantite']);
        echo '<br />'; 
        echo '<br />'; 
    }
    totaltotal($_SESSION['panier']);
    echo '<form action="index.php?page=panier" method="POST">
    <input type="submit" name="effacer" value="Effacer panier">
</form>';
} 
// else {
//     echo 'panier vide';
// }
?>

<br />
<!-- <form action="index.php?page=panier" method="POST">
    <input type="submit" name="effacer" value="Effacer panier">
</form> -->


<pre>
    <?php
    // var_dump($_SESSION['panier']);
    ?>
</pre>

<?php 

// if(!isset($_SESSION['panier']))
// {
//     $_SESSION['panier'] = array();
//     $_SESSION['panier']['id'] = array();
//     $_SESSION['panier']['quantite'] = array();
// }
//     array_push($_SESSION['panier']['id'],$_POST['id']);
//     array_push($_SESSION['panier']['quantite'],$_POST['quantite']);
    // array_push($_SESSION['panier']['prix'],$_POST['prix']);

?>



<?php 

// if (isset($_POST['id'])) {
//     totalPanier($_POST['id'], $_POST['quantite']);
//     echo '<br />';
//     echo '<br />';
// }

// $_SESSION['id'] = $_POST['id'];
// $_SESSION['quantite'] = $_POST['quantite'];

// echo $_SESSION['id'];
// echo '<br />';
// echo $_SESSION['quantite'];
// echo '<br />';
// echo $_SESSION['panier'];

?>

<!-- <form>
    <input type="hidden" name="deco" value="deconnexion">
    <button>session_destroy()</button>
</form> -->
