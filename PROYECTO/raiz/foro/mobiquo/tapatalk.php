<?php
define('MBQ_PROTOCOL', 'json');   //define is using json protocol,if not defined(default) means is using xmlrpc protocol
define('IN_MOBIQUO', true);
define('TT_ROOT', getcwd() . DIRECTORY_SEPARATOR);
/*allow cors calls from other domain*/
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Max-Age: 1000');

require_once('mobiquoCommon.php');

MbqMain::init();  /* frame init */
MbqMain::input();     /* handle input data */
require_once(MBQ_PATH.'IncludeBeforeMbqAppEnv.php');
MbqMain::initAppEnv();    /* application environment init */
@ ob_start();
require_once(MBQ_PATH . '/logger.php');
MbqMain::action();    /* main program handle */
MbqMain::beforeOutput();  /* do something before output */
MbqMain::output();    /* handle output data */

?>