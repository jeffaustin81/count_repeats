<?php
	// This will be our dependencies for this
	// file
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/RepeatCounter.php";
	
	use Symfony\Component\Debug\Debug;
	Debug::enable();
	
	// This sets up a new instance of our
	// Silex Application
	$app = new Silex\Application();
	
	$app['debug'] = true;
	
	// This registers Twig and lets Twig know
	// where our views will be stored
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../views'
	));
	
	// This sets up the home page route and 
	// renders our home page view
	$app->get("/", function() use ($app) {
		return $app['twig']->render('home.html.twig');
	});
	
	$app->get("/results", function() use ($app) {
		$wordcount = new RepeatCounter;
		$get_wordcount = $wordcount->countWord($_GET['sentence'], $_GET['word']);
		
		
		return $app['twig']->render('results.html.twig', array('results' => $get_wordcount));
	});
	
	return $app;
?>