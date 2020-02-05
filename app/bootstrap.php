<?php
//load config
require_once 'config/config.php';

//autoload helpers
require_once 'helpers/sessionHelper.php';
require_once 'helpers/urlHelper.php';

// spl_autoload_register(
//     function ($helper) {
//         require_once 'helpers/ ' . $helper . '.php';
//     }
// );

//autoload class
spl_autoload_register(
    function ($classname) {
        require_once 'libraries/' . $classname . '.php';
    }
);
