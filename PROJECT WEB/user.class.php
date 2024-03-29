<?php
class user
{
    public $id;
    public $nom;
    public $prenom;
    public $adresse;
    public $email;
    public $tel;
    public $password;
    public $admin;
    public $panier;



    public function adduser()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "insert into user (id,nom,prenom,adresse,email,tel,password) 
        values('$this->id','$this->nom','$this->prenom','$this->adresse','$this->email','$this->tel','$this->password')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
   
    }
    function listuser()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "select * from user";
        $res = $pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
    function deleteuser($id1)
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "delete from user where id='$id1'";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
    function updateuser()
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "update user set nom='$this->nom',prenom='$this->prenom',adresse='$this->adresse',email='$this->email',tel='$this->tel',password='$this->password' where id='$this->id'";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
    function getuser($id1)
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "select * from user where id='$id1'";
        $res = $pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
    function login($email,$password)
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "select * from user where email='$email' and password='$password'";
        $res = $pdo->query($req)or print_r($pdo->errorInfo());
        return $res;
    }
    function addtopanier($id1,$id2)
    {
        require_once('pdo.php');
        $cnx = new connexion();
        $pdo = $cnx->CNXbase();
        $req = "insert into panier (id_user,id_produit) values('$id1','$id2')";
        $pdo->exec($req) or print_r($pdo->errorInfo());
    }
   
    
}
