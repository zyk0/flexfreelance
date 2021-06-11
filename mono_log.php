<?php
	echo "mono_log.php";

	require_once __DIR__ . '/vendor/autoload.php';

	use Monolog\Logger;
	use Monolog\Handler\StreamHandler;

	//$log = new Logger('WARNING_LOG');
	//$log->pushHandler(new StreamHandler(__DIR__.'/logs/warning.log', Logger::WARNING));

	$errlog = new Logger('ERR_LOG');
	$errlog->pushHandler(new StreamHandler(__DIR__.'/logs/err.log', Logger::ERROR));

	//$infolog = new Logger('INFO_LOG');
	//$infolog->pushHandler(new StreamHandler(__DIR__.'/logs/info.log', Logger::INFO));

	//$log->warning('==warning log message=====');
	$errlog->error('==error log message=====');
	//$infolog->info('==info log message=====',  array('user' => 'admin','time' => date('H:i:a d.m.Y')));
?>