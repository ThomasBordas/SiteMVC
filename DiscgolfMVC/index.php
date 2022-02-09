<?php
require_once 'controller.php';

try {
    if (!isset($_GET["action"])) {
        require "templates/accueil.php";
        // gestion de la navigation par liens sur le site
    } else if (isset($_GET["action"])) {
        if ($_GET["action"] == "accueil") {
            require "templates/accueil.php";
        }
        if ($_GET["action"] == "presentation") {
            require "templates/presentation.php";
        }
        if ($_GET["action"] == "regles") {
            require "templates/regles.php";
        }
        if ($_GET["action"] == "parcours") {
            require "templates/parcours.php";
        }
        if ($_GET["action"] == "equipement") {
            require "templates/equipement.php";
        }
        if ($_GET["action"] == "achatLoc") {
            require "templates/achatLoc.php";
        }
        if ($_GET["action"] == "infosAdhesion") {
            require "templates/infosAdhesion.php";
        }
        if ($_GET["action"] == "parcoursPerrieres") {
            require "templates/parcoursPerrieres.php";
        }
        if ($_GET["action"] == "parcoursImage") {
            require "templates/parcoursImage.php";
        }
        if ($_GET["action"] == "infosCalendrier") {
            require "templates/infosCalendrier.php";
        }
        if ($_GET["action"] == "challengeCorrezien") {
            require "templates/challengeCorrezien.php";
        }
        if ($_GET["action"] == "discussions") {
            require "templates/Discussions.php";
        }
        if ($_GET["action"] == "connection") {
            require "templates/pageConnexion.php";
        }
        if ($_GET["action"] == "subscribe") {
            require "templates/inscription.php";
        }
        //tests pour l'inscription
        if ($_GET["action"] == "add") {

            if (isset($_POST["user"]) && (isset($_POST["pwd"])) && (isset($_POST["pwdV"])) && (isset($_POST["mail"]))) {

                $user = $_POST["user"];
                $pwd = $_POST["pwd"];
                $pwdV = $_POST["pwdV"];
                $mail = $_POST["mail"];
                $hash_mdp = password_hash($pwd, PASSWORD_DEFAULT);

                if (!empty($erreurs = testSub($mail, $user, $pwd, $pwdV))) {
                    $erreurs = testSub($mail, $user, $pwd, $pwdV);
                    require "templates/inscription.php";
                } else if (!doublons($mail, $user) && empty($erreurs = testSub($mail, $user, $pwd, $pwdV))) {
                    add_user($mail, $user, $hash_mdp);
                    session_start();
                    $_SESSION['user'] = $user;
                    require "templates/inscription.php";
                } else {
                    require "templates/inscription.php";
                }
            }
        }
        //tests pour la connexion
        if ($_GET["action"] == "connect") {

            if (isset($_POST["user"]) && (isset($_POST["pwd"]))) {

                $user = $_POST["user"];
                $pwd = $_POST["pwd"];

                if (!empty($erreurs = testConnectSimple($user, $pwd))) {
                    $erreurs = testConnectSimple($user, $pwd);
                    require "templates/pageConnexion.php";
                } else if (doublon_simple($user)) {
                    if (password_verify($pwd, recPwd($user))) {
                        session_start();
                        $_SESSION['user'] = $user;
                        require 'templates/pageConnexion.php';
                    } else {
                        $erreurs["pwd_user"] = "Mot de passe invalide";
                        require "templates/pageConnexion.php";
                    }
                } else {
                    require 'templates/erreur.php';
                }
            }
        }
        if ($_GET["action"] == "deconnexion") {
            require "templates/deconnexion.php";
        }
    } else {

        throw new Exception("<h1>Page non trouvée !!!</h1>");
    }
} catch (Exception $e) {

    $msgErreur = $e->getMessage();
    echo 'templates/erreur.php';
}
