<?php
	// This will be our dependencies for this
	// file
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/CountRepeats.php";
	
	// This sets up a new instance of our
	// Silex Application
	$app = new Silex\Application();
	
	// This registers Twig and lets Twig know
	// where our views will be stored
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../views'
	));
	
	// This sets up the home page route and 
	// renders our home page view
	$app->get("/", function() use ($app) {
		return $app['twig']->render('home_page.html.twig');
	});
	
	return $app;
?>