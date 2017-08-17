<?php
/**
 * Created by PhpStorm.
 * User: samy
 * Date: 7/29/17
 * Time: 4:40 PM
 */
include_once '../Modele/Etudiant.php';

if(isset($_POST['update']))
{

    Etudiant::updatedata($_POST['id'],$_POST['nom'],$_POST['postnom'],$_POST['prenom']);


}
