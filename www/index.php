<?php

require __DIR__ . "/../boot.php";

use Joomla\DI\Container;
use GHDownloader\Providers\ConfigServiceProvider;
use GHDownloader\Providers\DatabaseServiceProvider;
use GHDownloader\Providers\GithubServiceProvider;

$container = (new Container)
	->registerServiceProvider(new ConfigServiceProvider(APPROOT . "/etc/config.php"))
	->registerServiceProvider(new DatabaseServiceProvider)
	->registerServiceProvider(new GithubServiceProvider);

$app = new GHDownloader\Application;

$router = (new GHDownloader\Router($app->input))
	->setControllerPrefix("GHDownloader\\Controllers\\")
	->setDefaultController("DefaultController")
	->addMap('/tags', 'TagsController');

$app
	->setContainer($container)
	->setRouter($router)
	->execute();
