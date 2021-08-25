<?php
// version raph
class Article {
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

    public function displayArticle() {
        echo "ID : " .$this->id."<br />";
        echo "Article : " .$this->nom."<br />";
        echo "Description : ".$this->description."<br />";
        echo "Prix : ".$this->prix."<br /><br />";
        // echo "Image : " . $this->image . "<a href="index.php?page=article&article='.$article["id"].'">'.'<img src ="'.$article["photo"].'" width="100" height="100"/>'." ".'</a>" . "<br /><br />";

        echo "Image :<img src ='".$this->photo."' width='100' height='100'/><br /><br />";
        
    }
}

class Client {
    public function __construct(int $id, string $nom, int $age, string $email) {
        $this->id = $id;
        $this->nom = $nom;
        $this->age = $age;
        $this->email = $email;
    }

    public function displayClient() {
        echo "ID : " .$this->id."<br />";
        echo "Client : " .$this->nom."<br />";
        echo "Age : ".$this->age."<br />";
        echo "Email : ".$this->email."<br /><br />";    
    }
}

class Catalogue {
    public array $liste;

    public function displayCat() {
        foreach ($this->liste as $k => $v){
            echo "ID : " . $this->liste[$k]->id . "<br />";
            echo "Article : " . $this->liste[$k]->nom . "<br />";
            echo "Description : " . $this->liste[$k]->description . "<br />";
            echo "Prix : " . $this->liste[$k]->prix . "<br />";
            echo "Image :<img src ='".$this->liste[$k]->photo."' width='100' height='100'/><br /><br />";
        }
    }
}

class ListeClients {
    public array $autreliste;

    // public function displayClients() {
    //     foreach ($this->autreliste as $k => $v){
    //         echo "ID : " . $this->autreliste[$k]->id . "<br />";
    //         echo "Personne : " . $this->autreliste[$k]->nom . "<br />";
    //         echo "Age : " . $this->autreliste[$k]->age . "<br />";
    //         echo "Email : " . $this->autreliste[$k]->email . "<br />";
    //     }
    // }

    public function displayClients() {
        
        $arrayLength = count($this->autreliste);
        $i = 0;
        while($i < $arrayLength) {
            echo "ID : " . $this->autreliste[$i]->id . "<br />";
            echo "Personne : " . $this->autreliste[$i]->nom . "<br />";
            echo "Age : " . $this->autreliste[$i]->age . "<br />";
            echo "Email : " . $this->autreliste[$i]->email . "<br />";
            $i++;
        }

    }

}

?>