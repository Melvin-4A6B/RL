<?php

/**
 * Application settings
 */
$config['title'] = 'Login - Registration System';
$config['error'] = 'E_ALL';
$config['template'] = TRUE;
$config['root'] = 'http://localhost/login-registration/';
$config['valuta'] = '&euro;';

/**
 * Defaults
 */
$config['default_controller'] = 'Home';
$config['default_method'] = 'index';
$config['core'] = 'core/';
$config['controller'] = 'controllers/';
$config['model'] = 'models/';
$config['view'] = 'views/';


/**
 * Database
 */
$config['db_host'] = 'localhost';
$config['db_user'] = 'root';
$config['db_pass'] = 's9wsfc97vi';
$config['db_name'] = 'lr';
$config['db_dsn'] = 'mysql:host='.$config['db_host'].';dbname='.$config['db_name'];


foreach($config as $key => $value)
{
    define(strtoupper($key), $value);
}