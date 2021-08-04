<h2>Le catalogue des bonnes affaires</h2>
<p>C'est les soldes ! faites des bonnes affaires parmi chaussures, casquettes, t-shirts... </p>

<h2>Articles du jour<link href="bonjour.php" rel="stylesheet"></h2>

<div id="articles">
<?php
    $tab = [
        [
            "id" => 1,
            "nom" => "chaussure",
            "prix" => 70,
            'photo' => '../images/chaussures.jpg'
        ],
        [
            "id" => 2,
            "nom" => "casquette",
            "prix" => 20,
            'photo' => '../images/casquette.jpg'
        ],
        [
            "id" => 3,
            "nom" => "tshirt",
            "prix" => 40,
            'photo' => '../images/tshirt.jpg'
        ]
    ];

    foreach($tab as $article) {
        echo '<div class="article">';
        // méthode de postage
        
        echo $article["nom"]." ".$article["prix"]." € ".'<a href="index.php?page=article&article='.$article["id"].'">'.'<img src ="'.$article["photo"].'" width="100" height="100"/>'." ".'</a>';
        
        echo '<form action="index.php?page=panier" method="POST">
            <input type="number" name="quantite" min="0" required="required" placeholder="Entrer une quantité"/>
            <input name="id" value='.$article["id"].' type="hidden">
            <input name="active" type="hidden">
            <input name="prix" value ='.$article["prix"].' type="hidden">
            <p><input name="valider" type="submit" value="Valider" /></p>
        </form>';
        // echo '<input type="checkbox" name="checked" value="checked"/>';
        // echo input id hidden
        echo '</div>';        
    }
?>
</div>

<h2>Rechercher un article</h2>

<?php 
    echo '<form id="formRecherche" action="index.php?page=search" method="POST">';
    echo '<p><label for="search">Rechercher <input type="search" name="search"></label></p>
    <input type="submit">';
    echo '</form>';
?>

