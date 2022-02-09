<?php

session_start();
// On vérifie la méthode utilisée
if($_SERVER['REQUEST_METHOD'] == 'GET'){
   
    // On est en GET
    // On vérifie si on a reçu un id
    if(isset($_GET['lastId'])){
        // On récupère l'id et on le nettoie
        $lastId = (int)strip_tags($_GET['lastId']);

        // On initialise le filtre
        $filtre = ($lastId > 0) ? " WHERE `messages`.`id` > $lastId" : '';

        require_once('C:\wamp64\www\DiscgolfMVC\modele.php');
        $db = connect_db();

        // On écrit la requête
        $sql = 'SELECT `messages`.`id`, `messages`.`message`, `messages`.`created_at`, `dgb_table`.`pseudo_user` FROM `messages` LEFT JOIN `dgb_table` ON `messages`.`id_users` = `dgb_table`.`id`'.$filtre.' ORDER BY `messages`.`id` DESC LIMIT 8;';

        // On exécute la requête
        $query = $db->query($sql);

        // On récupère les données
        $messages = $query->fetchAll();

        // On encode en JSON
        $messagesJson = json_encode($messages);

        // On envoie
        echo $messagesJson;
    }
}else{
    // Mauvaise méthode
    http_response_code(405);
    echo json_encode(['message' => 'Mauvaise méthode']);
} 