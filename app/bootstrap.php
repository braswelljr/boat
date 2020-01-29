<?php
//load config
require_once 'config/config.php';

//load helpers
require_once 'helpers/urlHelper.php';
require_once 'helpers/sessionHelper';

//autoload class
spl_autoload_register(
    function ($classname) {
        require_once 'libraries/' . $classname . '.php';
    }
);
