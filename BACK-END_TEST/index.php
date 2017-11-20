<?php

    require_once("DB.php"); 

    $db = new DB("127.0.0.1", "reception", "root", "");
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //POST SOMETHING
        echo "POST";

    }

    else if($_SERVER['REQUEST_METHOD'] == "GET"){
        //GET SOMETHING
            echo json_encode(print_r($db->query("SELECT * FROM queue")));
            http_response_code(200);
    }

    //if none of the above request are called, invoke 405 error
    else{
            http_response_code(405);
    }


?>