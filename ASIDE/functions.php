<?php

// function afficheArticle1(){
//     echo $tab["nom"], " ";
//     echo $tab["prix"], " € ";
//     echo $tab["photo"], " ";
// }

function afficheArticle1(){
    echo "chaussure 70 € ";
    echo '<img src ="../image/chaussures.jpg" width="100" height="100"/>';
}

function afficheArticle2(){
    echo "casquette 20 € ";
    echo '<img src ="../image/casquette.jpg" width="100" height="100"/>';
}

function afficheArticle3(){
    echo "tshirt 40 € ";
    echo '<img src ="../image/tshirt.jpg" width="100" height="100"/>';
}


// include("catalogue.php");


function afficheArticle($article){
    $tab = [
        [
            "id" => 1,
            "nom" => "chaussure",
            "prix" => 70,
            'photo' => '<img src ="../image/chaussures.jpg" width="100" height="100"/>'
        ],
        [
            "id" => 2,
            "nom" => "casquette",
            "prix" => 20,
            'photo' => '<img src ="../image/casquette.jpg" width="100" height="100"/>'
        ],
        [
            "id" => 3,
            "nom" => "tshirt",
            "prix" => 40,
            'photo' => '<img src ="../image/tshirt.jpg" width="100" height="100"/>'
        ]
    ];

    foreach($tab as $truc) {  
        
        if ($article == $truc['nom']){
            echo $truc["nom"], " ";
            echo $truc["prix"], " € ";
            echo $truc["photo"], " ";
        }
    }

}
?>