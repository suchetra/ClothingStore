<?php

$tab = [
    [
        "id" => 1,
        "nom" => "chaussure",
        "prix" => 70,
        'photo' => '<img src ="../images/chaussures.jpg" width="100" height="100"/>',
    ],
    [
        "id" => 2,
        "nom" => "casquette",
        "prix" => 20,
        'photo' => '<img src ="../images/casquette.jpg" width="100" height="100"/>',
    ],
    [
        "id" => 3,
        "nom" => "tshirt",
        "prix" => 40,
        'photo' => '<img src ="../images/tshirt.jpg" width="100" height="100"/>',
    ]
];

foreach($tab as $article) { 
    if(isset($_GET['article'])){
        $articleR = $_GET['article'];
        $articleB = $article['id'];
    }
    if(isset($_POST['search'])){
    
    $articleR = $_POST['search'];
    $articleB = $article['nom'];
    }


    if ($articleR == $articleB) {

        echo '<div class="article">';
        echo $article["nom"], " ";
        echo $article["prix"], " € ";
        echo $article["photo"], " ";
        // echo '</a>';
        echo '</div>';    
    } 



    // if ($_GET['article'] == $article["id"]) {

    //     echo '<div class="article">';
    //     echo $article["nom"], " ";
    //     echo $article["prix"], " € ";
    //     echo $article["photo"], " ";
    //     echo '</a>';
    //     echo '</div>';    
    
    // } 
      
    // echo '<a href="article.php?article='.$article["id"].'"><img src="'.$article["photo"].'"  ';

}



?>