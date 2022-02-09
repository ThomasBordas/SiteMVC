<?php

require_once 'modele.php';

function erreur($msgErreur)
{
    require 'templates/erreur.php';
}


function add_user($mail, $user, $pwd)
{
    ajouter_user($mail, $user, $pwd);

}

function doublons($mail,  $user)
{
    return verifier_doublon($mail,  $user);
}

function doublon_simple($user)
{
    return verifier_doublon_simple($user);
}

function connect($mail,  $user, $pwd)
{
    return connexion($mail,  $user, $pwd);
}

function recPwd( $user)
{
    return recupPwd( $user);
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Test champs vides ou non respect des regexp sur ma formulaire d'inscription .
function testSub($mail, $user, $pwd, $pwdV)
{
    $erreurs = array();
    $regex_input = '/^[A-Za-z0-9-]{4,30}$/';
    $regex_pwd = "#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#";
    $user = test_input($user);
    $pwd = test_input($pwd);
    $mail = test_input($mail);
    $pwdV = test_input($pwdV);

    if (
        empty($user)  || empty($mail) || empty($pwd) || empty($pwdV) || ($pwdV != $pwd) || !preg_match($regex_input, $user)
        || !filter_var($mail, FILTER_VALIDATE_EMAIL) || !preg_match($regex_pwd, $pwd) || doublons($mail, $user)
    ) {

        if (empty($mail)) {
            $erreurs["mail_user"] = "Veuillez entrer une adresse email .";
        } else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $erreurs["mail_user"] = "Veuillez entrer une adresse email valide.";
        }

        if (empty($user)) {
            $erreurs["pseudo_user"] = "Veuiller entrer un nom d'utilisateur.";
        } else if (!preg_match($regex_input, $user)) {
            $erreurs["pseudo_user"] = "Veuillez entrer un nom d'utilisateur valide.";
        }

        if (empty($pwd)) {
            $erreurs["pwd_user"] = "Veuillez entrer un mot de passe .";
        } else if (!preg_match($regex_pwd, $pwd)) {
            $erreurs["pwd_user"] = "Veuillez entrer un mot de passe valide.";
        }
        if (empty($pwdV)) {
            $erreurs["pwdV_user"] = "Veuillez entrer une confirmation de mot de passe .";
        } else if ($pwdV != $pwd) {
            $erreurs["pwdV_user"] = "Veuillez entrer un mot de passe identique.";
        }
        if (doublons($mail, $user)) {
            $erreurs["doublons"] = "Il existe déjà un compte avec ce pseudo ou cette adresse mail ";
        }
    }
    return $erreurs;
}

//Verification champs vide pour la page de connexion


function testConnectSimple( $user, $pwd)
{
    $erreurs = array();
    $user = test_input($user);
    $pwd = test_input($pwd);


    if (empty($user)  ||  empty($pwd) || !doublon_simple($user)) {


        if (empty($user)) {
            $erreurs["pseudo_user"] = "Veuiller entrer un nom d'utilisateur.";
        }

        if (empty($pwd)) {
            $erreurs["pwd_user"] = "Veuillez entrer un mot de passe .";
        }
    }
    if (!empty($user)) {
        if (!doublon_simple($user)) {
            $erreurs["doublons"] = "Ce compte n'existe pas.";
        }
    }
    return $erreurs;
}

