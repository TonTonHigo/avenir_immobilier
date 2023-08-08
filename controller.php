<?php

switch($_POST['controller']){

    case "contact":
        // code
        break;

    case "search":
        // code
        break;

    default :

    header("Location: index.php");
    break;
}

?>