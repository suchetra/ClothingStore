<h1>Le catalogue des bonnes affaires 
    
<?php 
// if (isset($GET['prenom'])) {
//     echo '<p>pour</p>';
//     echo $GET['prenom'];
// }    
?>
</h1>

<p>C'est les soldes ! faites des bonnes affaires parmi chaussures, casquettes, t-shirts... </p>

<?php
include ('ASIDE/addArticle.php');
?>

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

    foreach($tab as $article) {
        echo '<div>';
        // méthode de postage
        echo $article["nom"], " ";
        echo $article["prix"], " € ";
        echo '<a href="index.php?page=article&article='.$article["id"].'">';
        echo $article["photo"], " ";
        echo '</a>';
        echo '</div>';        
    }
    ?>
</div>

