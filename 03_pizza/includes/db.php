<?php
    function Connect()
    {
        $SERVER = "Localhost";
        $user = "root";
        $password = "";
        $db = "14 sz2";

        $con = mysqli_connect($SERVER, $user, $password, $db);
        if(!$con)
        {
            die("Connection Error");
        }

        return $con;
    }
?>