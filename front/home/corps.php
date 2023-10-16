<?php

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'inscription':
            require_once('front/home/inscription.php');
            break;
        case 'contact':
            require_once('front/home/contact.php');
            break;
        case 'aboutUs':
            require_once('front/home/aboutUs.php');
            break;
        case 'aPropos':
            require_once('front/home/aPropos.php');
            break;
        default:
            echo "404 NOT FOUND PAGE VAR IS EMPTY !!!!!!!!!!";
            break;
    }
} else if (!isset($_GET['page'])) {
    require('front/home/slider.php');
    require('front/home/services.php');
    require('front/home/features.php');
    require('front/home/main.php');
    require('front/home/coutner.php');
} else {
    require_once('front/home/404.php');
}
?>