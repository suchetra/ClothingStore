<?php
produitRupture();
echo '<br /><br />';
commandesSinceTen();
echo '<br /><br />';
totalChaqueCommande();
echo '<br /><br />';
nbCommandeParClient();
echo '<br /><br />';
// creerCommandeTroisArticles($a,$b,$c)

if(isset($_POST['idCommande'], $_POST['idProduit'], $_POST['quantite'])){
    creerCommandeUnArticles($_POST['idCommande'],$_POST['idProduit'],$_POST['quantite']);
}
?>

<form action="" method="POST">
    <label for="idCommande">idCommande :</label>
    <input type="text" name="idCommande" id="idCommande">
    <label for="idProduit">idProduit :</label>
    <input type="text" name="idProduit" id="idProduit">
    <label for="quantite">quantite :</label>
    <input type="text" name="quantite" id="quantite">
    <input type="submit">
</form>



<h2>Le catalogue version SQL</h2>

<p>Règles : (2 parmi les requêtes de sélection sur une seule table, 2 parmi les requêtes de sélection sur plusieurs tables, et 2 parmi les requêtes d’insertion, modification et suppression).</p>
<p>6 requêtes sélectionnées :</p>
<ul>
    <li>Liste des produits en rupture de stock (dont la quantité est “0”)</li>
    <li>Liste des commandes créées depuis les 10 derniers jours</li>
    <li>Prix total de chaques commandes</li>
    <li>Nombre de commandes par client</li>
    <li>Créer une commande de 3 articles différent (avec ses lignes de commande associées)</li>
    <li>Supprimer les clients qui n’ont pas de commande</li>
</ul>
<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=importationetape3;charset=utf8', 'root', '');
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
    <strong>ID du produit</strong> : <?php echo $donnees['idProduit']; ?><br />
    Nom du produit : <?php echo $donnees['nomArticle']; ?><br />Description : <?php echo $donnees['description']; ?><br />Prix : <?php echo $donnees['prix']; ?> € <br />Image : <img src = <?php echo $donnees['image']; ?> width = "100"> <br />Poids : <?php echo $donnees['poids']; ?><br />Quantité : <?php echo $donnees['quantiteDispo']; ?><br />En vente : <em><?php echo $donnees['enVente']; ?></em>
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

