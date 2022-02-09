<?php

require("connexion.php");

// Connexion à la BDD
function connect_db()
{
    $dsn = "mysql:dbname=" . BASE . ";host=" . SERVER . ";port=3306";
    try {
        $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        $connexion = new PDO($dsn, USER, PASSWD, $option);
    } catch (PDOException $e) {
        printf("Echec connexion : %s\n", $e->getMessage());
        exit();
    }
    return $connexion;
}

//Ajout d'une ligne dans la bdd (nouvel inscrit)
function ajouter_user($mail, $user, $pwd)
{

    $connexion = connect_db();
    $sql = "INSERT INTO dgb_table (pseudo_user ,mail_user ,pwd_user  ) VALUES ( :user, :mail, :pwd )";
    $reponse = $connexion->prepare($sql);
    $reponse->bindParam(':mail', $mail);
    $reponse->bindParam(':user', $user);
    $reponse->bindParam(':pwd', $pwd);
    $reponse->execute();
}

//verification de l'existance des données d'entrée dans la bdd
function verifier_doublon($mail,  $user)
{
    $connexion = connect_db();
    $req = "SELECT * FROM dgb_table WHERE mail_user= :mail AND pseudo_user= :user ";
    $reponse = $connexion->prepare($req);
    $reponse->bindValue(":user", $user, PDO::PARAM_STR);
    $reponse->bindValue(":mail", $mail, PDO::PARAM_STR);
    $reponse->execute();
    if ($reponse->rowCount() != 0) {
        return true;
    } else {
        return false;
    }
}

function verifier_doublon_simple($user)
{
    $connexion = connect_db();
    $req = "SELECT * FROM dgb_table WHERE  pseudo_user= :user ";
    $reponse = $connexion->prepare($req);
    $reponse->bindValue(":user", $user, PDO::PARAM_STR);
    $reponse->execute();
    if ($reponse->rowCount() != 0) {
        return true;
    } else {
        return false;
    }
}

//connection à la page principale si donnees existantes dans bdd
function connexion($mail,  $user, $pwd)
{
    $connexion = connect_db();
    if (verifier_doublon($mail,  $user) == true) {
        $sql = "SELECT * FROM dgb_table WHERE mail_user= :mail AND pseudo_user= :user";
        $reponse = $connexion->query($sql);
        $data = $reponse->fetch();
        $pwd_h = $data['pwd_user'];
        $pwdOk = password_verify($pwd, $pwd_h);
        if ($pwdOk == true) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

//recuperation pwd haché
function recupPwd( $user)
{
    $connexion = connect_db();
    $sql = "SELECT * FROM dgb_table WHERE  pseudo_user= '$user'";
    $reponse = $connexion->query($sql);
    $data = $reponse->fetch();
    $pwd_h = $data['pwd_user'];
    return $pwd_h;
}


