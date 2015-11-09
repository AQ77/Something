<?php
    $db = new mysqli(
        "eu-cdbr-azure-north-d.cloudapp.net",
        "b6493667ce3e8d",
        "1be52bfc",
        "firstwebdatabase"

    );

    if($db->connect_errno){
        die('Connectfailed['.$db->connect_error.']');
    }else{
        echo "good job!";
    }
?>