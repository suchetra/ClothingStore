<h2>Panier avec les classes PHP orienté objet</h2>

<!-- raccourci des accolades marche car sur une ligne -->
<?php 
if(!isset($_SESSION['panier'])) $_SESSION['panier']= new Panier;

if (isset($_POST['id']))$_SESSION['panier']->add($_POST['id'],$_POST['quantite']);

if (isset($_GET['modifier']))
// if (isset($_POST['id']) && (isset($_POST['quantite']))
{
    $_SESSION['panier']->update($_POST['id'], $_POST['quantite']);
}

// var_dump($_SESSION['panier']);
if(isset($_SESSION['panier']) ) {
    var_dump($_SESSION['panier']);
    foreach($_SESSION['panier']->panier as $panier){

    // echo $panier['id'];

    // ('SELECT * FROM vetements where id ='.$panier['id'])

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=clothingstore;charset=utf8', 'nico', 'nico');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM vetements where id ='.$panier['id']);

    while ($donnees = $reponse->fetch()){
    
        echo $donnees['id']."<br />";
        echo $donnees['nom']."<br />";
        echo $donnees['description']."<br />";
        echo $donnees['prix']."<br />";
        echo "<img src='".$donnees['photo']."'width='100' height='100'/><br />";
        // echo $donnees['quantite'];
        echo $panier['quantite']."<br /><br />";
        // echo $panier[$key]['quantite']."<br /><br />";

        echo '<div class="article">';
        // méthode de postage
        
        echo '<form action="index.php?page=panierObjet" method="POST">
        <input name="quantite" value ='.$panier['quantite'].' type="number">
        <p><input name="valider" type="submit" value="Valider" /></p>
        </form>';
        // echo '<input type="checkbox" name="checked" value="checked"/>';
        // echo input id hidden
        echo '</div>';       
    }

    $reponse->closeCursor();
    } 
}


// try
// {
//     $bdd = new PDO('mysql:host=localhost;dbname=clothingstore;charset=utf8', 'nico', 'nico');
// }
// catch(Exception $e)
// {
//     die('Erreur : '.$e->getMessage());
// }

// // // $panier = new Panier(1,'r','r',2,'r',1);

// $reponse = $bdd->query('SELECT * FROM vetements where id ='.$panier['id']);

// // // $catalogue->liste[]= new Article(1,'nom',2);

// while ($donnees = $reponse->fetch())
//     {
//         $panier->panier[]= new Panier($donnees['id'], $donnees['nom'], $donnees['description'], $donnees['prix'], $donnees['photo'], $donnees['quantite']);
//     }

// // while ($donnees = $reponse->fetch())
// //     {
// //         $panier->panier[]= new Panier($donnees['id'], $donnees['nom'], $donnees['description'], $donnees['prix'], $donnees['photo'], $donnees['quantite']);
// //     }

// $reponse->closeCursor();

// // var_dump($panier);
// $panier->displayPanier();
?>