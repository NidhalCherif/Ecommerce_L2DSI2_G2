<?php
require_once "produit.php";
require_once "connexion.php";
class CRUD_Produit
{
    private $pdo; // objet PDO
    function __construct()
    {
        $connexion = new connexion();
        $this->pdo = $connexion->getConnexion();
    }
    function findAll()
    {
        $sql = "select * from produit";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    function find($id)
    {
        $sql = "select * from produit where id=$id";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM);
    }
    function delete($id)
    {
        $sql = "delete from produit where id=$id";
        $res = $this->pdo->exec($sql);
        return  $res;
    }
    function add(produit $produit)
    {

        $lib = $produit->getLibelle();
        $pu = $produit->getPrix();
        $qte = $produit->getQte();
        $des = $produit->getDesc();
        $image = $produit->getImage();
        $pro = $produit->getPromo();
        $sql = "INSERT INTO  produit   VALUES (NULL, '$lib',$pu, $qte, '$des',
      '$image',$pro)";
        $res = $this->pdo->exec($sql);
        return $res;
    }
}
