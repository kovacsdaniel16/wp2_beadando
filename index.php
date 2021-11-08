<?php


define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'].'/wp2_beadando/'); //alkalmazás gyökér könyvtára a szerveren

define('SITE_ROOT', 'http://localhost/wp2_beadando/'); //URL cím az alkalmazás gyökeréhez


require_once(SERVER_ROOT . 'controllers/' . 'router.php'); // a router.php vezérlő betöltése conntrollers mappa/router.php


?>