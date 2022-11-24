<?php
    function Akcios()
    {
        $con = Connect();
        $sql = "SELECT * FROM pizzak WHERE akcios = 1";
        $result = mysqli_query($con, $sql);
        return $result;
        mysqli_close($con);
    }

    function Pizzak()
    {
        $con = Connect();
        $sql = "SELECT * FROM pizzak";
        $result = mysqli_query($con, $sql);
        return $result;
        mysqli_close($con);
    }
?>