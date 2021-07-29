<?php

$tab = [
    [
        "id" => 1,
        "nom" => "chaussure",
        "prix" => 70,
        'photo' => '<img src ="../image/chaussures.jpg" width="100" height="100"/>',
    ],
    [
        "id" => 2,
        "nom" => "casquette",
        "prix" => 20,
        'photo' => '<img src ="../image/casquette.jpg" width="100" height="100"/>',
    ],
    [
        "id" => 3,
        "nom" => "tshirt",
        "prix" => 40,
        'photo' => '<img src ="../image/tshirt.jpg" width="100" height="100"/>',
    ]
];

foreach($tab as $article) { 
    
    if ($_GET['article'] == $article["id"]) {

        echo '<div class="article">';
        echo $article["nom"], " ";
        echo $article["prix"], " € ";
        echo $article["photo"], " ";
        echo '</a>';
        echo '</div>';    
    
    }

   
    // echo '<a href="article.php?article='.$article["id"].'"><img src="'.$article["photo"].'"  ';

}

?>