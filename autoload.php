<?php

require_once('config.php');

spl_autoload_register(function($class)
{
    if(file_exists(CORE . $class . '.php'))
    {
        require_once(CORE . $class . '.php');
    }
    elseif(file_exists(CONTROLLER . $class . '.php'))
    {
        require_once(CONTROLLER . $class . '.php');
    }
    elseif(file_exists(MODEL . $class . '.php'))
    {
        require_once(MODEL . $class . '.php');
    }
});