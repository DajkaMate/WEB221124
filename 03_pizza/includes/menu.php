<?php
    $content = "includes/akcios.php";

    if(isset($_GET["p"])){
        switch($_GET["p"]){
            case "pizza":
                $content = "includes/pizza.php";
                break;
            case "tipp":
                $content = "includes/tipp.php";
                break;
            case "ev":
                $content = "includes/ev.php";
                break;
            case "adatlap":
                $content = "includes/adatlap.php";
                break;
        }
    }
?>