<?php
require_once 'lib/Slim/Slim.php';
require_once 'services/Services.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
$app->response->headers->set('Content-Type', 'application/json');

$app->get('/', function(){echo json_encode( array( "error" => "No method" ) );});

$app->get('/books/', function(){
	$service = new Services();
	echo json_encode( $service->getAllBooks() );
});
$app->get('/books/:title', function($title){
	$service = new Services();

	echo json_encode( $service->getBookWithTitle($title) );
});



$app->run();