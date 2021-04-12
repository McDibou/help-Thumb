<?php

if (isset($_GET)) {
    switch ($_GET):
        case "dashbord":
            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'dashbord.admin.private.controller.php';
            break;
        case "favories":
            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'favories.admin.private.controller.php';
            break;
    endswitch;
}

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'home.admin.private.controller.php';