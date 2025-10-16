<?php

define('ABSPATH', __DIR__);

require '../src/Autoloader.php';

use SquallPHP\Core\Application as App;

$app = new App();
$app->config()->setViewsDirectory(ABSPATH.'/src/Views');

$app->router()->get('/squallphp/Demo/')->status(200)->render('Welcome');
$app->router()->get('/squallphp/Demo/health')->status(200)->json([ 'healthy' => true ]);

$app->run();

?>