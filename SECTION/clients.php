<h2>Les clients</h2>

<?php

$client = new Client(4, 'truc', 55, 'truc@email.fr');
$client->displayClient();


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=importationetape3;charset=utf8', 'nico', 'nico');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$clients = new ListeClients;

$reponse = $bdd->query('SELECT * FROM clients');

// $catalogue->liste[]= new Article(1,'nom',2);

while ($donnees = $reponse->fetch())
    {
        $clients->autreliste[]= new Client($donnees['idClient'], $donnees['prenomNom'], $donnees['age'], $donnees['email']);
    }

$reponse->closeCursor();

$clients->displayClients();






?>