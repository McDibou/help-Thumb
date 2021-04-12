<?php


if (isset($_SESSION['id_role'])) {
    switch ($_SESSION['id_role']):
        case "1":
            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'user.public.controller.php';
            break;
        case "2":
            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'admin.public.controller.php';
            break;
    endswitch;
}