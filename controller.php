<?php
include "connexion.php";

if(isset($_POST['controller'])){
    switch($_POST['controller']){
    
        case "contact":
            $contact = $connexion -> insert($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['message']);
            break;
    
        case "search":
            // code
            break;
    
        default :
            // code
        break;
    }
    
}

?>