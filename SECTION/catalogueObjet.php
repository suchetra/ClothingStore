

<h2>Le catalogue objet</h2>

<?php

// version iulian qui marche pas
// class Article 
// {
//     public $nom;
//     public function displayArticle($article){
//         echo "Article : " . $this->nom;
//     }
// }

// $article = new Article;
// $test = new Article;
// $test->displayArticle("aaaaa");


// version iulian qui marche 
// class Article 
// {
//     public function __construct($nom) {
//         $this->nom = $nom;
//     }

//     public function displayArticle($article){
//         echo "Article : " . $this->nom;
//     }
// }

// $test = new Article("test");
// $test->displayArticle("re");



// version avec classe Catalogue qui marche pas
// class Article 
// {
//     public function __construct($nom, $description, $prix, $image, $poids, $stock, $disponible) {
        
//         $this->nom = $nom;
//         $this->description = $description;
//         $this->prix = $prix;
//         $this->image = $image;
//         $this->poids = $poids;
//         $this->stock = $stock;
//         $this->disponible = $disponible;
//     }
//     // public $nom; 
//     // public $description;
//     // public $prix;
//     // public $image;
//     // public $poids;
//     // public $stock;
//     // public $disponible;

//     public function displayArticle(){
//         echo "Article : " . $this->nom . "<br />";
//         echo "description : " . $this->description . "<br />";
//         echo "prix : " . $this->prix . "<br />";
//         echo "image : " . $this->image . "<br />";
//         echo "poids : " . $this->poids . "<br />";
//         echo "stock : " . $this->stock . "<br />";
//         echo "disponible : " . $this->disponible . "<br />";
//     }
// }

// // $article = new Article("test");

// // var_dump($article);
// // echo $article;
// $bracelet = new Article("bracelet", "pas de description", "9 €", "pas d'image", "200 g", "oui", "oui");
// $ok = new Article("ok", "pas de description", "9 €", "pas d'image", "200 g", "oui", "oui");
// // $bracelet->displayArticle();
// // $ok->displayArticle();
// // echo $bracelet;

// ne pas faire extends
// class Catalogue extends Article 
// {
//     public function __construct($article) {
//         $this->article = $article;
//     }


//     public function displayCat(){
//         echo "Catalogue : " . $this->article . "<br />";
//     }
// }

// $bracelet = new Article("bracelet", "pas de description", "9 €", "pas d'image", "200 g", "oui", "oui");
// $bracelet->displayCat();



// version html qui marche
// class Article 
// {
//     public $nom = "rien";
//     public $description = "rien";
// }

// $article = new Article;
// $article->nom = "bracelet";
// $article->description = "c'est un petit bracelet";

// var_dump($article);




$article = new Article (5, "bracelet", "c'est un petit bracelet", 44, "../images/chaussures.jpg");
// $article->nom = "bracelet";
// $article->description = "c'est un petit bracelet";
// $article->prix = "44";

$article->displayArticle();



try
{
    $bdd = new PDO('mysql:host=localhost;dbname=clothingstore;charset=utf8', 'nico', 'nico');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$catalogue = new Catalogue;

$reponse = $bdd->query('SELECT * FROM vetements');

// $catalogue->liste[]= new Article(1,'nom',2);

while ($donnees = $reponse->fetch())
    {
        $catalogue->liste[]= new Article($donnees['id'], $donnees['nom'], $donnees['description'], $donnees['prix'], $donnees['photo']);
    }

$reponse->closeCursor();

$catalogue->displayCat();





// $catalogue = new Catalogue();





// // $arrayobject = new ArrayObject($array);

// // var_dump($arrayobject);
// // }

?>


