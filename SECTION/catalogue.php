<h2>Le catalogue des bonnes affaires</h2>
<p>C'est les soldes ! faites des bonnes affaires parmi chaussures, casquettes, t-shirts... </p>

<h2>Articles du jour<link href="bonjour.php" rel="stylesheet"></h2>

<div id="articles">
<?php
    $tab = [
        [
            "id_du_cata" => 1,
            "nom" => "Basket - Nike
            Air Force 1 Low Multi Swoosh",
            "prix" => 120,
            'photo' => '../images/basket/1.jpg'
            // https://www.courir.com/fr/p/nike-air-force-1-low-multi-swoosh-1492370.html?_mak_partner_id=1026&_mak_partner_data=||c|312173995659|||&_mak_partner_campaign=G/SRC/FR/FR/Shopping/Nike/AF1-CSS&gclid=Cj0KCQjw1dGJBhD4ARIsANb6OdmcUu-BwePrAH4QfZXlZehqytXHNuGgKAbcZ0g4KJfY_54mnCVfHiIaAntDEALw_wcB
        ],
        [
            "id_du_cata" => 2,
            "nom" => "Casquette - Nike NBA Toronto Raptors Heritage86",
            "prix" => 35,
            'photo' => '../images/casquette/1.jpg'
            // https://www.nike.com/ch/fr/t/casquette-nba-toronto-raptors-heritage86-9hD8Cl/DJ6352-010
        ],
        [
            "id_du_cata" => 3,
            "nom" => "Tee-shirt - Nike Sportswear",
            "prix" => 30,
            'photo' => '../images/tee_shirt/1.jpg'
            // https://www.nike.com/fr/t/tee-shirt-sportswear-pour-HWS2lF/DQ3944-100?nikemt=true&cp=30566810280_search_%7c%7c10690195814%7c108495199634%7c%7cc%7cFR%7ccssproducts%7c453050557329_GEOZ&ds_rl=1252249&gclid=Cj0KCQjw1dGJBhD4ARIsANb6OdmXKSG-r2cBkuoFvmqyvQwlsh9PXiDLWB1czO31OVq67asRr42LsYIaAlpbEALw_wcB&gclsrc=aw.ds
        ]
    ];

    foreach($tab as $arti_cata) {
        echo '<div class="article">';
        // méthode de postage
        
        echo '<a href="index.php?page=article&article='.$arti_cata["id_du_cata"].'">'.'<img src ="'.$arti_cata["photo"].'"/>'.$arti_cata["nom"]." ".$arti_cata["prix"]." € ".'</a>';
        
        echo '<form action="index.php?page=panier" method="POST">
            <input type="number" name="quanti_caton" min="0" required="required" placeholder="Quantité"/>
            <input name="id_caton" value='.$arti_cata["id_du_cata"].' type="hidden">
            <input name="active" type="hidden">
            <input name="prix" value ='.$arti_cata["prix"].' type="hidden">
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

