
<h2>Le catalogue du marché noir de clothingstore</h2>

<p>Liste des produits</p>
<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=campus_marche_noir;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM produits');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>ID du produit</strong> : <?php echo $donnees['id']; ?><br />
    Nom du produit : <?php echo $donnees['nom']; ?><br />Prix : <?php echo $donnees['prix']; ?> € <br />Photo : <img src = <?php echo $donnees['photo']; ?> width = "100"> <br />
    <form action="index.php?page=panier" method="POST">
        <input type="hidden" name="id" value=<?php echo $donnees['id']; ?> >
        <input type="number" name="quantite" min="0" required="required" placeholder="Entrer une quantité"/>
        <p><input name="valider" type="submit" value="Valider" /></p>
    </form>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

