<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 17/11/2014
 * Time: 16:50
 */

require __DIR__.'/vendor/autoload.php';

$var1 = 10;
$var2 = 52;

$test = \src\Validator\StringValidator::lengthEqual($var1,$var2);
var_dump($test);