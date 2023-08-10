<?php
include "connexion.php";

$response = array(); // Créez un tableau pour stocker la réponse

if(isset($_POST['controller'])){
    switch($_POST['controller']){
        case "contact":
            $contact = $connexion->insert($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['message']);
            if($contact) {
                $response['success'] = true; // Opération réussie
            } else {
                $response['success'] = false; // Échec de l'opération
            }
            break;
        default:
            // code
            break;
    }
}

// Envoyez la réponse JSON
header('Content-Type: application/json');
echo json_encode($response);
?>