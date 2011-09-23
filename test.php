<?php
define('PROJECT_ROOT', dirname(__FILE__) . '/');

function my_autoload($classname) {
    if (substr($classname, 0, 4) === 'Test') {
        $dir = 'test/';
        $classname = substr($classname, 4);
    } else {
        $dir = 'src/';
    }

    $file = PROJECT_ROOT . $dir . str_replace('_', '/', $classname) . '.php';

    if (file_exists($file)) {
        require_once($file);
    }
}

spl_autoload_register('my_autoload');

require_once("PHPUnit/Autoload.php");

$command = new PHPUnit_TextUI_Command();
$command->run(array(
    'php',
    PROJECT_ROOT . 'test/Suite.php'
));

