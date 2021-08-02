<h2>Ajouter un article</h2>

<?php
include ('ASIDE/addArticle.php');
?>

<?php
$products = $DB->query('SELECT * FROM products');
foreach ($products as $product): ?>
<<div class="article">>
    <p>name:ipad</p>
</div>




<h1>Le catalogue des bonnes affaires 
    
<?php 
// if (isset($GET['prenom'])) {
//     echo '<p>pour</p>';
//     echo $GET['prenom'];
// }    
?>
</h1>

<p>C'est les soldes ! faites des bonnes affaires parmi chaussures, casquettes, t-shirts... </p>


<h2>Articles du jour<link href="bonjour.php" rel="stylesheet"></h2>

    

<?php 
// if (isset($_POST['search'])) {
//     header('Location: index.php?page=search');
// }
//  else {
    echo '<form action="index.php?page=search" id="formHeader" method="POST">
    <p><label for="search">Rechercher <input type="search" name="search"></label></p>
    <input type="submit">
    </form>';
    // }
    
    // <button>Search</button>
?>

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
        
        echo '<form action="SECTION/panier.php" method="POST">';
        echo '<input type="number" name="quantite" min="1" required="required" placeholder="Entrer une quantité"/>';
        echo '<input type="hidden" name="id" value='.$article["id"].' >';
        echo '<p><input type="submit" name="submit" value="Valider" /></p>';
        echo '</form>';
        echo '<input type="checkbox" name="checked" value="checked"/>';
        // echo input id hidden
        echo '</div>';        
    }
    // echo '<form action="SECTION/panier.php">';
    
    // echo '</form>';
    ?>
</div>



