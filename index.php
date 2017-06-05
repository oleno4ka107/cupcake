<?php
$action = isset($_GET['action']) ? $_GET['action'] : 'home';
$pages = ['home'];
    require $action . '.php';
