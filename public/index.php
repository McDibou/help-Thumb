<?php

session_start();

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR . 'Autoloader.php';

Autoloader::registre();
$db = new Database();

if (isset($_SESSION['session_id']) && $_SESSION['session_id'] === session_id()) {
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'admin.controller.php';
} else {
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'public.controller.php';
}