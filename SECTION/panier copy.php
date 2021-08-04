<?php 

if(!isset($_SESSION['panier']))
{
    $_SESSION['panier'] = array();
    $_SESSION['panier']['id'] = array();
    $_SESSION['panier']['quantite'] = array();
    $_SESSION['panier']['prix'] = array();
}
    array_push($_SESSION['panier']['id'],$_POST['id']);
    array_push($_SESSION['panier']['quantite'],$_POST['quantite']);
    // array_push($_SESSION['panier']['prix'],$_POST['prix']);

?>

<h1>Votre panier</h1>
    
<p>Voici les articles sélectionnés :</p>
<br /><br />

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
<pre>
    <?php
    var_dump($_SESSION['panier']);
    ?>
</pre>

<!-- <form>
    <input type="hidden" name="deco" value="deconnexion">
    <button>session_destroy()</button>
</form> -->
