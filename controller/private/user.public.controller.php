<?php

if (isset($_GET)) {
    switch ($_GET):
        case "dashbord":
            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'dashbord.user.private.controller.php';
            break;
        case "favories":
            require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'favories.user.private.controller.php';
            break;
    endswitch;
}

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR . 'home.user.private.controller.php';