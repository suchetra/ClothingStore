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
        
        if ($article == $element['id']){
            echo $element["nom"], " ";
            echo $element["prix"], " € ";
            echo $element["photo"], " ";
        }
    }

}

// totalPanier comme afficheArticle
function totalPanier($article){
    $tab = [
        [
            "id" => 1,
            "nom" => "chaussure",
            "prix" => 70,
            "quantite" => $article['quantite'],
            'photo' => '<img src ="../images/chaussures.jpg" width="100" height="100"/>'
        ],
        [
            "id" => 2,
            "nom" => "casquette",
            "prix" => 20,
            "quantite" => $article['quantite'],
            'photo' => '<img src ="../images/casquette.jpg" width="100" height="100"/>'
        ],
        [
            "id" => 3,
            "nom" => "tshirt",
            "prix" => 40,
            "quantite" => $article['quantite'],
            'photo' => '<img src ="../images/tshirt.jpg" width="100" height="100"/>'
        ]
    ];

    foreach($tab as $element) {  
        
        if ($article == $element['id']){
            echo $element["nom"], " ";
            echo $element["prix"], " € ";
            echo $element["quantité"], " ";
            echo $element["photo"], " ";
        }
    }

}



// totalPanier qui marche pas

// function totalPanier() {
//     $tab = [
//         [
//             "id" => 1,
//             "nom" => "chaussure",
//             "prix" => 70,
//             'photo' => '../images/chaussures.jpg'
//         ],
//         [
//             "id" => 2,
//             "nom" => "casquette",
//             "prix" => 20,
//             'photo' => '../images/casquette.jpg'
//         ],
//         [
//             "id" => 3,
//             "nom" => "tshirt",
//             "prix" => 40,
//             'photo' => '../images/tshirt.jpg'
//         ]
//     ];

//     foreach ($tab as $element){
//         if(isset($element['submit'])) {  
//             echo $element["nom"], " ";
//             echo $element["prix"], " € ";
//             echo $element["photo"], " ";
//         }
//     }





    // foreach($tab as $element) {  

    // echo $element["quantite"];
    // echo $element["nom"]." ".$element["prix"]*$element["quantite"]." € ".'<a href="index.php?page=article&article='.$element["id"].'">'.'<img src ="'.$element["photo"].'" width="100" height="100"/>'." ".'</a>';
    // echo $element['prix'];
    // }
// }
?>