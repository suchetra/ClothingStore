<?php
// pour faire des requêtes auprès de la BDD
class DB{

    // variable de configuration, pas besoin d'y toucher donc on met en private, on se met sur notre BDD clothingstore
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'clothingstore';
    private $db; 

    // sert à changer et à se connecter à une autre BDD
    public function __construct($host = null, $username = null, $password = null, $database = null){
        if($host != null){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        }

        // on se connecte sur la base
        // entre parenthèse sert à dire qu'on interagit avec la BDD en utf-8
        $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }

    public function query($sql){
        // on récupère les produits de la BDD et on la stocke dans $req pour pouvoir l'utiliser
        // $req = $DB->db->prepare('SELECT * FROM products');
        // on éxecute la requête
        // $req->execute();
        // et on affiche les (fetchAll) résultats
        // var_dump($req->fetchAll());

        // on change les trucs avant car mtn c'est dans cette page
        $req = $this->db->prepare($sql);
        $req->execute();
        // PDO::FETCH_OBJ veut dire que je veux les résultats sous forme d'objet
        return $req->fetchAll(PDO::FETCH_OBJ);
    }
}