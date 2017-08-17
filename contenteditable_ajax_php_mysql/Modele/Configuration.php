<?php

/**
 * Created by PhpStorm.
 * User: samy
 * Date: 7/29/17
 * Time: 4:25 PM
 */
class Configuration
{

    public static function connexion()
    {

        try{
            $pdo=new PDO('mysql:host=localhost;dbname=mvctest','root','test');

            return $pdo;
        }catch (Exception $ex)
        {
            Die($ex->getMessage());
        }



    }

}