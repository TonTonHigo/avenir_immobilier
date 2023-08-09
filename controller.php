<?php
include "connexion.php";

if(isset($_POST['controller'])){
    switch($_POST['controller']){
    
        case "contact":
            $contact = $connexion -> insert($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['message']);
            header("Location: index.php");
            break;
    
        case "search":
            // code
            header("Location: index.php");
            break;
    
        default :
    
        header("Location: index.php");
        break;
    }
    
}

?>