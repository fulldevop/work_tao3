<?php

return tao_cfg('database', array(
	'connections' => array(
		'general' => array(
			'driver' => 'mysql',
			'host' => env('TECHART_DB_HOST', env('DATA_HOST', 'mysql57.vps.intranet')),
			'port' => env('TECHART_DB_PORT', '3306'),
			'database' => env('TECHART_DB_DATABASE', env('DATA_DB', 'workspace_tao3')),
			'username' => env('TECHART_DB_USERNAME', env('DATA_USER', 'SYSADM')),
			'password' => env('TECHART_DB_PASSWORD', env('DATA_PASSWORD', 'SYSADM')),
			'unix_socket' => env('TECHART_DB_SOCKET', ''),
			'charset' => 'utf8mb4',
			'collation' => 'utf8mb4_unicode_ci',
			'prefix' => '',
			'strict' => true,
			'engine' => null,
		),
	)
));
