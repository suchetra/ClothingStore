<?php

// function afficheArticle1(){
//     echo $tab["nom"], " ";
//     echo $tab["prix"], " € ";
//     echo $tab["photo"], " ";
// }

function afficheArticle1(){
    echo "chaussure 70 € ";
    echo '<img src ="../images/chaussures.jpg" width="100" height="100"/>';
}

function afficheArticle2(){
    echo "casquette 20 € ";
    echo '<img src ="../images/casquette.jpg" width="100" height="100"/>';
}

function afficheArticle3(){
    echo "tshirt 40 € ";
    echo '<img src ="../images/tshirt.jpg" width="100" height="100"/>';
}


// include("catalogue.php");


function afficheArticle($article){
    $tab = [
        [
            "id" => 1,
            "nom" => "chaussure",
            "prix" => 70,
            'photo' => '<img src ="../images/chaussures.jpg" width="100" height="100"/>'
        ],
        [
            "id" => 2,
            "nom" => "casquette",
            "prix" => 20,
            'photo' => '<img src ="../images/casquette.jpg" width="100" height="100"/>'
        ],
        [
            "id" => 3,
            "nom" => "tshirt",
            "prix" => 40,
            'photo' => '<img src ="../images/tshirt.jpg" width="100" height="100"/>'
        ]
    ];

    foreach($tab as $element) {  
        
        if ($article == $element['nom']){
            echo $element["nom"], " ";
            echo $element["prix"], " € ";
            echo $element["photo"], " ";
        }
    }

}

function totalPanier($article, $quantite) {

    $tab = [
        [
            "id" => 1,
            "nom" => "chaussure",
            "prix" => 70,
            'photo' => '<img src ="../images/chaussures.jpg" width="100" height="100"/>'
        ],
        [
            "id" => 2,
            "nom" => "casquette",
            "prix" => 20,
            'photo' => '<img src ="../images/casquette.jpg" width="100" height="100"/>'
        ],
        [
            "id" => 3,
            "nom" => "tshirt",
            "prix" => 40,
            'photo' => '<img src ="../images/tshirt.jpg" width="100" height="100"/>'
        ]
    ];

    foreach($tab as $element) {  
        
        if ($article == $element['id']){
            // echo "<div class='"articlePanier"'>;
            echo "Article : ".$element["photo"].'<br />';
            echo $element["nom"].'<br />';
            echo "Quantité et prix : ".$quantite." x ".$element["prix"], " € ".'<br/ >';
            $total = $element["prix"] * $quantite." € ";
            echo '<form action="index.php?page=panier" method="POST">
            
            <input name="id" value='.$element["id"].' type="hidden">
            
            <input type="number" name="quantite" min="0" value="'.$quantite.'"/>

            <input type="submit" name="modifQuantite" value="Modifier quantité">
            </form>';
            // echo "total : ", $element["prix"] * $quantite." € ";
            echo "total : ".$total;
            // echo "</div>";
        }
    }
}

// function modifQuantite ($id, $quantite) {
//     $modif = count($_SESSION['panier']);
//     for($i=0; $i<$modif; $i++){
//         if ($id == $_SESSION['panier'][$i]['id']){
//             $_SESSION['panier'][$i]['quantite'] = $quantite;
//         }
//     }
// }

// 3e parametre valeur ini false ou true
function modifQuantite ($id, $quantite, $ajout) {
    $existe = false;
    if (!isset($_SESSION['panier'])){
        $_SESSION['panier'][] = ['id' => $_POST['id'], 'quantite' => $_POST['quantite']]; 
    } else {
        $modif = count($_SESSION['panier']);
        for($i=0; $i<$modif; $i++){
            if ($id == $_SESSION['panier'][$i]['id']){
                if ($ajout==true){
                    $_SESSION['panier'][$i]['quantite'] = $quantite;
                } if ($ajout==false){
                    $_SESSION['panier'][$i]['quantite'] += $quantite;
                }
                $existe = true;
            }
        }
        
        if (!$existe) {
            $_SESSION['panier'][] = ['id' => $_POST['id'], 'quantite' => $_POST['quantite']];
        }
    }

    // $modif = count($_SESSION['panier']);
    // for($i=0; $i<$modif; $i++){
    //     if ($id == $_SESSION['panier'][$i]['id']){
    //         $_SESSION['panier'][$i]['quantite'] = $quantite;
    //     }
    //     if ($quantite != $_POST['modifQuantite']){
    //         $quantite = $_POST['modifQuantite'];
    //     } 
    // }
}
// elle crée une nouvelle session


// function modifQte($id,$quantite){
//     // On compte le nombre d'articles différents dans le panier
//     $modif = count($_SESSION['panier']);
//     // On parcoure le tableau de session pour modifier l'article précis.
//         for($i=0; $i<$modif; $i++){
//             if ($id == $_SESSION['panier'][$i]['id']){
//                 $_SESSION['panier'][$i]['quantite']= $quantite;
//             }
//         }
//     }

function totaltotal($panier){
    $tab = [
        [
            "id" => 1,
            "nom" => "chaussure",
            "prix" => 70,
            'photo' => '<img src ="../images/chaussures.jpg" width="100" height="100"/>'
        ],
        [
            "id" => 2,
            "nom" => "casquette",
            "prix" => 20,
            'photo' => '<img src ="../images/casquette.jpg" width="100" height="100"/>'
        ],
        [
            "id" => 3,
            "nom" => "tshirt",
            "prix" => 40,
            'photo' => '<img src ="../images/tshirt.jpg" width="100" height="100"/>'
        ]
    ];

    $total = 0;
    // extraire valeur panier
    foreach($panier as $elementpanier) {
        $id = $elementpanier['id'];
        $quantite = $elementpanier['quantite'];
        
        // prix element
        foreach($tab as $element) {  
            if ($id == $element['id']){
                $total += $quantite * $element["prix"];
            }
        }
    }
    echo "Total du panier ".$total." €";    
}

function viderPanier($panier) {
    unset($_SESSION['panier']);
}

// <ul>
//     <li>Liste des produits en rupture de stock (dont la quantité est “0”)</li>
//     <li>Liste des commandes créées depuis les 10 derniers jours</li>
//     <li>Prix total de chaques commandes</li>
//     <li>Nombre de commandes par client</li>
//     <li>Créer une commande de 3 articles différent (avec ses lignes de commande associées)</li>
//     <li>Supprimer les clients qui n’ont pas de commande</li>
// </ul>

function produitRupture(){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=importationetape3;charset=utf8', 'nico', 'nico');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM produits WHERE quantiteDispo = 0;');

    while ($donnees = $reponse->fetch())
    {
        // print_r($donnees);
        echo "Liste des produits n'ayant pas de stock : "."<br />";
        echo "ID produit : ".$donnees['idProduit']."<br />";
        echo "Quantité : ".$donnees['quantiteDispo']."<br /><br />";
    }

    $reponse->closeCursor(); 
}

function commandesSinceTen(){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=importationetape3;charset=utf8', 'nico', 'nico');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM commandes WHERE date BETWEEN CURRENT_DATE - INTERVAL 10 day AND CURRENT_DATE');

    while ($donnees = $reponse->fetch())
    {
        // print_r($donnees);
        echo "Liste des commandes sur les 10 derniers jours : "."<br />";
        echo "ID commande : ".$donnees['idCommande']."<br />";
        echo "ID client : ".$donnees['idClient']."<br />";
        echo "Date : ".$donnees['date'];
        echo '<br /><br />';
    }

    $reponse->closeCursor(); 
}

function totalChaqueCommande(){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=importationetape3;charset=utf8', 'nico', 'nico');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT idCommande, ROUND(SUM(prix*quantite),2) AS prix_total FROM commande_produit INNER JOIN produits ON produits.idProduit = commande_produit.idProduit GROUP BY idCommande');

    while ($donnees = $reponse->fetch())
    {
        // print_r($donnees);
        echo "Total de chaque commande : "."<br />";
        echo "ID commande : ".$donnees['idCommande']."<br />";
        echo "Total de la commande : ".$donnees['prix_total']." €";
        echo '<br /><br />';
    }

    $reponse->closeCursor(); 
}

function nbCommandeParClient(){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=importationetape3;charset=utf8', 'nico', 'nico');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->query('SELECT idClient, COUNT(idClient) AS nombre FROM commandes GROUP BY idClient');

    while ($donnees = $reponse->fetch())
    {
        echo "Nombre de commandes par clients : "."<br />";
        echo "ID client : ".$donnees['idClient']."<br />";
        echo "Nombre de commandes : ".$donnees['nombre'];
        // print_r($donnees);
        echo '<br /><br />';
    }

    $reponse->closeCursor(); 
}

function creerCommandeUnArticles($idCommande, $idProduit, $quantite){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=importationetape3;charset=utf8', 'nico', 'nico');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $reponse = $bdd->prepare('INSERT INTO commande_produit(idCommandeProduit, idCommande, idProduit, quantite) VALUES (?,?,?,?)');

    $reponse->execute(array(NULL, $idCommande, $idProduit, $quantite));

    
    // pierre version plus rapide mais moins sécurisé
    // $reponse = $bdd->exec('INSERT INTO commande_produit(idCommandeProduit, idCommande, idProduit, quantite) VALUES (array(NULL, $idCommande, $idProduit, $quantite))');
    
    // raph version
    // $article = $bdd->prepare('INSERT INTO article(nom, image, distance_terre, duree, depart, navette, commentaire, prix, grosdes) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)');
    
    
    // $article->execute(array(($_POST['nom']), ($_POST['image']), $_POST['distance_terre'], $_POST['duree'], $_POST['depart'], $_POST['navette'], $_POST['commentaire'], $_POST['prix'], $_POST['grosdes']));
    $reponse = $bdd->query('SELECT * FROM commande_produit');
    
    while ($donnees = $reponse->fetch())
    {
        echo "Nombre de commandes par clients : "."<br />";
        echo "ID client : ".$donnees['idClient']."<br />";
        echo "Nombre de commandes : ".$donnees['nombre'];
        // print_r($donnees);
        echo '<br /><br />';
    }

    $reponse->closeCursor();





    // while ($donnees = $reponse->fetch())
    // {
    //     echo "Nouvelle commande avec un article : "."<br />";
    //     echo "ID commande : ".$donnees['idCommande']."<br />";
    //     echo "ID produit : ".$donnees['idProduit']."<br />";
    //     echo "quantité : ".$donnees['quantite'];
    //     // print_r($donnees);
    //     echo '<br /><br />';
    // }

    // $reponse->closeCursor(); 
}

// function creerCommandeTroisArticles(){
//     INSERT INTO commande_produit(idCommandeProduit, idCommande, idProduit, quantite) VALUES (14,6,1,1),(15,6,2,1),(16,6,12,1)
// }

// function supprimerClientSansCommande(){
//     DELETE FROM clients WHERE idClient NOT IN (SELECT DISTINCT idClient FROM commandes)
// }

// function avec SQL
// dans une fonction, jamais de $_POST
function afficheId($id){
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=clothingstore;charset=utf8', 'nico', 'nico');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

        $reponse = $bdd->query('SELECT id, nom, prix FROM vetements WHERE id='.$id);
    
        while ($donnees = $reponse->fetch())
        {
            // print_r($donnees);
            echo "ID commande : ".$donnees['id']."<br />";
            echo "Nom : ".$donnees['nom']."<br />";
            echo "Prix : ".$donnees['prix']." €";
            echo '<br /><br />';
        }
        $reponse->closeCursor(); 
}

// function creerCommandeUnArticle($id, $nom, $prix, $photo){
//     try
//     {
//         $bdd = new PDO('mysql:host=localhost;dbname=vetements;charset=utf8', 'nico', 'nico');
//     }
//     catch(Exception $e)
//     {
//             die('Erreur : '.$e->getMessage());
//     }

//     $reponse = $bdd->prepare('INSERT INTO vetements(id, nom, prix, photo) VALUES (?,?,?,?)');
//     $reponse->execute(array(NULL, $id, $nom, $prix, $photo));

//     $reponse = $bdd->query('SELECT * FROM vetements');
    
//     while ($donnees = $reponse->fetch())
//     {
//         echo "Nombre de commandes par clients : "."<br />";
//         echo "ID client : ".$donnees['id']."<br />";
//         echo "Nom : ".$donnees['nom']."<br />";
//         echo "Prix : ".$donnees['prix'];

//         echo '<br /><br />';
//     }

//     $reponse->closeCursor();


// }

// displayArticle(Article){
//     echo "Article : " . $this->nom;
// }

?>