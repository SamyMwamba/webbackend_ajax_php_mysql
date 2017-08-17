<?php

/**
 * Created by PhpStorm.
 * User: samy
 * Date: 7/29/17
 * Time: 4:24 PM
 */
require_once 'Configuration.php';
class Etudiant
{
    private $id;
    private $nom;
    private $postnom;
    private $prenom;

    /**
     * Etudiant constructor.
     * @param $id
     * @param $nom
     * @param $postnom
     * @param $prenom
     */
    public function __construct($id, $nom, $postnom, $prenom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->postnom = $postnom;
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPostnom()
    {
        return $this->postnom;
    }

    /**
     * @param mixed $postnom
     */
    public function setPostnom($postnom)
    {
        $this->postnom = $postnom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public static function affichetout()
    {
        $tableau=array();
        $sql="select * from etudiant";
        $connexion=Configuration::connexion();
        if($connexion!=null)
        {
            $requete=$connexion->prepare($sql);
            $requete->execute();
            while ($object=$requete->fetch(PDO::FETCH_OBJ))
            {
                $tableau[]=new Etudiant(
                    $object->id,
                    $object->nom,
                    $object->postnom,
                    $object->prenom
                );


            }



        }


     return $tableau;
    }
public static function updatedata($id,$nom,$postnom,$prenom)
{

    $connnexion=Configuration::connexion();
    $sql="update etudiant set nom='".$nom."', prenom='".$prenom."', postnom='".$postnom."' where id='".$id."'";
    if($connnexion!=null)
    {
        $requete=$connnexion->prepare($sql);
        $requete->execute();
    }

}



}