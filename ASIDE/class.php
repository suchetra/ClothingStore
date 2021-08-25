<?php
// version raph
class Article 
{
    // public string $nom = "rien";
    // public string $description = "rien";
    // public int $prix = 0;

    public function __construct(int $id, string $nom, string $description, float $prix, string $photo) {
        
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->photo = $photo;
        // $this->poids = $poids;
        // $this->stock = $stock;
        // $this->disponible = $disponible;
    }

    public function displayArticle()
    {
        echo "ID : " .$this->id."<br />";
        echo "Article : " .$this->nom."<br />";
        echo "Description : ".$this->description."<br />";
        echo "Prix : ".$this->prix."<br /><br />";
        // echo "Image : " . $this->image . "<a href="index.php?page=article&article='.$article["id"].'">'.'<img src ="'.$article["photo"].'" width="100" height="100"/>'." ".'</a>" . "<br /><br />";

        echo "Image :<img src ='".$this->photo."' width='100' height='100'/><br /><br />";
        
    }
}

class Catalogue
{
    public array $liste;

    public function displayCat()
    {
        foreach ($this->liste as $k => $v){
            echo "ID : " . $this->liste[$k]->id . "<br />";
            echo "Article : " . $this->liste[$k]->nom . "<br />";
            echo "Description : " . $this->liste[$k]->description . "<br />";
            echo "Prix : " . $this->liste[$k]->prix . "<br />";
            echo "Image :<img src ='".$this->liste[$k]->photo."' width='100' height='100'/><br /><br />";
        }
    }

}

?>