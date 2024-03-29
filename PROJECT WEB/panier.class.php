<?php
class Panier {
    private $id;
    private $id_user;
    private $id_prod;
    private $qte;

   public function addPanier()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "insert into panier (id_user,id_prod,qte) 
        values('$this->id_user','$this->id_prod','$this->qte')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
   
    }

    // Add getters and setters for the properties

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdUser() {
        return $this->id_user;
    }

    public function setIdUser($id_user) {
        $this->id_user = $id_user;
    }

    public function getIdProd() {
        return $this->id_prod;
    }

    public function setIdProd($id_prod) {
        $this->id_prod = $id_prod;
    }

    public function getQte() {
        return $this->qte;
    }

    public function setQte($qte) {
        $this->qte = $qte;
    }
    public function selectProd($id_prod)
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "select * from produit where id='$id_prod'";
        $res = $pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
}?>