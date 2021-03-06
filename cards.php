<?php
    require_once "bootstrap.php"; 
    require_once "utils/functions.php";
    if (userIsLogged()) {
        require_once "db/connections.php";
        require_once "db/database.php";
        require_once "db/users_db.php";
        require_once "model/client.php";
        require_once "model/card.php";

        $templateParams['title'] = "Metodo di pagamento";
        $templateParams['header_title'] = "Carte";
        $templateParams['styles'] = ['<link rel="stylesheet" type="text/css" href="./css/cards.css?'.time().'" />'];        
        require "template/common_top_html.php";
        require "template/header.php";
        $db = DbConnections::mySqlConnection();
        if ((!isset($_SESSION['address']) && (isset($_POST['address'])))) {
            $_SESSION['address'] = $_POST['address'];
        }
        if (isset($_GET['edit'])) {
            unset($_SESSION['address']);
        }
        require "template/cards_template.php";
        require "template/footer.php";
        require "template/common_bottom_html.php";
    } else {
        header("Location:login.php?type=client");
    }
?>