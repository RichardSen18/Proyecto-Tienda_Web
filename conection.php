<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "tecno_sale";

    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
    {

        die("failed to connect!");
    }
?>