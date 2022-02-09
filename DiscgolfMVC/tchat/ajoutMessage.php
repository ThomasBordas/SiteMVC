<?php
// Ce fichier reçoit les données en json et enregistre le message
session_start();

// On vérifie la méthode
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    // On vérifie si l'utilisateur est connecté
    if(isset($_SESSION['user'])){
        // L'utilisateur est connecté
        // On récupère le message
        $donneesJson = file_get_contents('php://input'); //permet de lire des données brutes depuis le corps de la requête

        // On convertit les données en objet PHP
        $donnees = json_decode($donneesJson);

        // On vérifie si on a un message
        if(isset($donnees->message) && !empty($donnees->message)){
            // On a un message
            // On le stocke
            // On se connecte
            require_once('./modele.php');
            $db = connect_db();

            // On écrit la requête
            $user =  $_SESSION['user'];
            $sql = "SELECT id FROM dgb_table WHERE  pseudo_user= '$user'";
            $reponse = $db->query($sql);
            $data = $reponse->fetch();
            $id_user = $data['id'];
            
            $sql = 'INSERT INTO `messages`(`message`, `id_users`) VALUES (:message, :user);';

            // On prépare la requête
            $query = $db->prepare($sql);

            // On injecte les valeurs
            $query->bindValue(':message', strip_tags($donnees->message), PDO::PARAM_STR);
            $query->bindValue(':user',$id_user , PDO::PARAM_INT);

            // On exécute en vérifiant si ça fonctionne
            if($query->execute()){
                http_response_code(201);
                echo json_encode(['message' => 'Enregistrement effectué']);
            }else{
                http_response_code(400);
                echo json_encode(['message' => 'Une erreur est survenue']);
            }
        }else{
            // Pas de message
            http_response_code(400);
            echo json_encode(['message' => 'Le message est vide']);
        }
    }else{
        // Non connecté
        http_response_code(400);
        echo json_encode(['message' => 'Vous devez vous connecter']);
    }
}else{
    // Mauvaise méthode
    http_response_code(405);
    echo json_encode(['message' => 'Mauvaise méthode']);
}