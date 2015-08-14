<?php
	//  This is where all the magic happens
	// this will be what the browser interacts
	// with, accessing our app file and running
	//  our routes
	$website = require_once __DIR__.'/../app/app.php';
	$website->run();
?>