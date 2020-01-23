<?php
//load config
require_once 'config/config.php';

//autoload class
spl_autoload_register(
    function ($classname) {
        require_once 'libraries/' . $classname . '.php';
    }
);
