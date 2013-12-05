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
];