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
        


            echo '<div class="article">';
        // méthode de postage
        
        echo '<form action="index.php?page=panierObjet" method="POST">
            <input type="number" name="quantite" min="0" required="required" placeholder="Entrer une quantité"/>
            <input name="id" value='.$this->liste[$k]->id.' type="hidden">
            <input name="active" type="hidden">
            <input name="prix" value ='.$this->liste[$k]->prix.' type="hidden">
            <p><input name="valider" type="submit" value="Valider" /></p>
        </form>';
        // echo '<input type="checkbox" name="checked" value="checked"/>';
        // echo input id hidden
        echo '</div>';        
        }
    }
}

class ListeClients {
    public array $autreliste;

    // manière foreach
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

class Panier {
    public array $panier;

    // public function __construct(int $id, string $nom, string $description, float $prix, string $photo, int $quantite) {
    //     $this->id = $id;
    //     $this->nom = $nom;
    //     $this->description = $description;
    //     $this->prix = $prix;
    //     $this->photo = $photo;
    //     $this->quantite = $quantite;
    // }

    // public function displayPanier() {
    //     $arrayLength = count($this->panier);
    //     $i = 0;
    //     while($i < $arrayLength) {
    //         echo "ID : " . $this->panier[$i]->id . "<br />";
    //         echo "Article : " . $this->panier[$i]->nom . "<br />";
    //         echo "description : " . $this->panier[$i]->description . "<br />";
    //         echo "Prix : " . $this->panier[$i]->prix . "<br />";
    //         echo "Photo : " . $this->panier[$i]->photo . "<br />";
    //         echo "Quantité : " . $this->panier[$i]->quantite . "<br />";

    //         $i++;
    //     }
    // }

    // function totalPanier($article, $quantite) {

    //     $tab = [
    //         [
    //             "id" => 1,
    //             "nom" => "chaussure",
    //             "prix" => 70,
    //             'photo' => '<img src ="../images/chaussures.jpg" width="100" height="100"/>'
    //         ],
    //         [
    //             "id" => 2,
    //             "nom" => "casquette",
    //             "prix" => 20,
    //             'photo' => '<img src ="../images/casquette.jpg" width="100" height="100"/>'
    //         ],
    //         [
    //             "id" => 3,
    //             "nom" => "tshirt",
    //             "prix" => 40,
    //             'photo' => '<img src ="../images/tshirt.jpg" width="100" height="100"/>'
    //         ]
    //     ];
    
    //     foreach($tab as $element) {  
            
    //         if ($article == $element['id']){
    //             // echo "<div class='"articlePanier"'>;
    //             echo "Article : ".$element["photo"].'<br />';
    //             echo $element["nom"].'<br />';
    //             echo "Quantité et prix : ".$quantite." x ".$element["prix"], " € ".'<br/ >';
    //             $total = $element["prix"] * $quantite." € ";
    //             echo '<form action="index.php?page=panierObjet" method="POST">
                
    //             <input name="id" value='.$element["id"].' type="hidden">
                
    //             <input type="number" name="quantite" min="0" value="'.$quantite.'"/>
    
    //             <input type="submit" name="modifQuantite" value="Modifier quantité">
    //             </form>';
    //             // echo "total : ", $element["prix"] * $quantite." € ";
    //             echo "total : ".$total;
    //             // echo "</div>";
    //         }
    //     }
    // }

    public function add($id,$quantite) {
        $this->panier[]=['id'=>$id, 'quantite'=>$quantite];
    }

    // s'inpirer d'article
    public function update($id,$newQuantite) {
        $existe = false;
        // $key ou $truc est le premier niveau dans le var_dump : "array" (0 si un article, 1 si deux, etc.)
        // $element est le deuxième niveau : "array" avec id et quantite
        foreach($this->panier as $key=> $element){
        // si le premier $key qui à pour id de la BDD le même id que l'utilisateur a sélectionné 
            if ($this->panier[$key]['id'] == $id)
            // $this->panier[$key]['quantite'] = $newQuantite;
            $this->panier[$key]['quantite'] += $newQuantite;
            $existe = true;
        }

    }




    // public function delete($id) {
    //     $this->panier[]=unset($_SESSION['panier']);
    //     ;
    // }

    // s'inspirer ?
    // function modifQuantite ($id, $quantite, $ajout) {
    //     $existe = false;
    //     if (!isset($_SESSION['panier'])){
    //         $_SESSION['panier'][] = ['id' => $_POST['id'], 'quantite' => $_POST['quantite']]; 
    //     } else {
    //         $modif = count($_SESSION['panier']);
    //         for($i=0; $i<$modif; $i++){
    //             if ($id == $_SESSION['panier'][$i]['id']){
    //                 if ($ajout==true){
    //                     $_SESSION['panier'][$i]['quantite'] = $quantite;
    //                 } if ($ajout==false){
    //                     $_SESSION['panier'][$i]['quantite'] += $quantite;
    //                 }
    //                 $existe = true;
    //             }
    //         }
            
    //         if (!$existe) {
    //             $_SESSION['panier'][] = ['id' => $_POST['id'], 'quantite' => $_POST['quantite']];
    //         }
    //     }
    // }


    
    //     $arrayLength = count($this->panier);
    //     $i = 0;
    //     $reponse = $bdd->exec(INSERT INTO 'vetements'('id', 'quantite') VALUES ($this->panier[$i]->id, $this->panier[$i]->quantite)) 
    //     while($donnees = $reponse->fetch()) {
    //         $truc->$panier[]= new Panier;
    //         $i++;
    //     }
    // }

    // public function update($id, $quantite) {
    //     $arrayLength = count($this->panier);
    //     $i = 0;
    //     while($i < $arrayLength) {
    //         UPDATE 'vetements' SET 'id'=[$this->panier[$i]->id], 'quantite'=[$this->panier[$i]->quantite])
    //         $i++;
    //     }
    // }

    // public function delete($id) {
    //     $arrayLength = count($this->panier);
    //     $i = 0;
    //     while($i < $arrayLength) {
    //         DELETE 'id'=[$this->panier[$i]->id] FROM 'vetements' 
    //         $i++;
    //     }
    // }
    
    
}


?>



