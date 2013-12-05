<?php

return [
	'debug' => (getenv('ENV') === 'development'),
	'database' => [
		'host' => 'localhost',
		'user' => 'root',
		'password' => 'root',
		'database' => 'gh_downloader',
		'prefix' => 'jos_',
		'driver' => 'mysqli'
	],
	'github' => [
		'username' => null,
		'password' => null,
		'user' => 'joomla',
		'repo' => 'joomla-cms'
	]
];