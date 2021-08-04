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
                    // $existe = true;
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

?>