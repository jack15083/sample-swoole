<?php
define('APP_PATH', dirname(__FILE__));
require_once APP_PATH . '/config/envcnf/ol/ENVConst.php';
$appConfig = require_once(APP_PATH . '/config/UserConfig.php');
//require_once '../weblib/require.php';
return \frame\App::createApplication($appConfig); //返回
