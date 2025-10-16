<?php

define('ABSPATH', __DIR__);

require '../src/Autoloader.php';

use SquallPHP\Core\Application as App;

$app = new App();
$app->config()->setViewsDirectory(ABSPATH.'/src/Views');

$app->router()->get('/squallphp/Demo/', function ($req, $res)
{
    return $res->status(200)->render('Welcome');
});

$app->run();

?>