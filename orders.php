<?php
    require_once "bootstrap.php"; 
    require_once "utils/functions.php";
    if (userIsLogged()) {
        require_once "db/connections.php";
        require_once "db/database.php";
        require_once "model/order.php";
        require_once "utils/functions.php";  

        $templateParams['title'] = "Ordini";
        require "template/common_top_html.php";
        require "template/header.php";
        $db = DbConnections::mySqlConnection();
        require "template/order_template.php";
        require "template/common_bottom_html.php";
    } else {
        header("Location:login.php?type=client");
    }

?>