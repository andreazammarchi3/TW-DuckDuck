<?php
require_once "db/connections.php";
require_once "db/database.php";
require_once "utils/functions.php";
require_once "bootstrap.php";
require_once "template/common.php";
if (userIsLogged()) {
    if (isSeller()) {
        $templateParams['title'] = "Pezzi";
        $templateParams['scripts'] = [
        '<script src="js/edit_products.js"></script>',
        '<script src="js/size_selector.js"></script>'];
        $templateParams['header_title'] = "I miei pezzi";
        $templateParams['styles'] = ['<link rel="stylesheet" type="text/css" href="./css/my_products.css?'.time().'" />'];
        require "template/common_top_html.php";
        require "template/header.php";
        $db = DbConnections::mySqlConnection();
        $seller_id = $_SESSION['id'];
        require "template/seller_pieces.php";
        require "template/footer.php";
        require "template/common_bottom_html.php";
    } else {
        die(displayError("Accesso negato"));
    }
} else {
    header("Location:login.php?type=seller");
}
