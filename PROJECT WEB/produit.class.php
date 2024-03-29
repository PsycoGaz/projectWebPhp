<?php
class produit
{
    public $id;
    public $nomProd;
    public $descProd;
    public $categ;
    public $imgProd;
    public $prix;
   


    public function addProd()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "insert into produit (id,nomProd,descProd,categ,imgProd,prix) 
        values('$this->id','$this->nomProd','$this->descProd','$this->categ','$this->imgProd','$this->prix')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
   
    }
    function listProd()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "select * from produit";
        $res = $pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
    function listProdH()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "select * from produit where categ='Homme'";
        $res = $pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
    function listProdF()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "select * from produit where categ='Femme'";
        $res = $pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
    function listProdE()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "select * from produit where categ='Enfant'";
        $res = $pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
    function listProdA()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "select * from produit where categ='Accessoires'";
        $res = $pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
    function deleteProd($id1)
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "delete from produit where id='$id1'";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
    function updateProd()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "update produit set nomProd='$this->nomProd',descProd='$this->descProd',categ='$this->categ',imgProd='$this->imgProd',prix='$this->prix' where id='$this->id'";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
    function getProd($id1)
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "select * from produit where id='$id1'";
        $res = $pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
}
?>