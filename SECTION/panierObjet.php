<h2>Panier avec les classes PHP orienté objet</h2>

<?php

if(isset($_SESSION['panier'])) {
    $_SESSION['panier']->add($_POST['id'],$_POST['quantite']);

    
    foreach($_SESSION['panier'] as $panier){
        totalPanier($panier['id'], $panier['quantite']); 
        // modifQ ($panier['id'], $panier['quantite']);
        echo '<br />'; 
        echo '<br />'; 
    }
    totaltotal($_SESSION['panier']);
    echo '<form action="index.php?page=panierObjet" method="POST">
    <input type="submit" name="effacer" value="Effacer panier">
    </form>';
} else {
    $_SESSION['panier']= new Panier;
  
}


// try
// {
//     $bdd = new PDO('mysql:host=localhost;dbname=clothingstore;charset=utf8', 'nico', 'nico');
// }
// catch(Exception $e)
// {
//     die('Erreur : '.$e->getMessage());
// }

// // $panier = new Panier(1,'r','r',2,'r',1);

// $reponse = $bdd->query('SELECT * FROM vetements');

// // $catalogue->liste[]= new Article(1,'nom',2);

// while ($donnees = $reponse->fetch())
//     {
//         $panier->panier[]= new Panier($donnees['id'], $donnees['nom'], $donnees['description'], $donnees['prix'], $donnees['photo'], $donnees['quantite']);
//     }

// $reponse->closeCursor();

// // var_dump($panier);
// $panier->displayPanier();
?>