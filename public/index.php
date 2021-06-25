<?php

require_once '../vendor/autoload.php';

use Micro\Config;
use Micro\Controller;
use MicroORM\ConnectionHolder;


Config::loadConfigFile("../config.json");

$db_config = Config::getConfig("DB");
if($db_config){
    ConnectionHolder::getInstance()->loadConfig($db_config);
}


if(!Controller::exec("myapp\\controllers")){
    header("location:" . Config::$PATH_ROOT . Config::$APP_DEFAULT_HANDLER);
}