<?php
require_once( 'class/mrouter.class.php' );

$router = new mRouter();

$router->get( '', function( $response ) {
    include( 'view/home.php' );
});

$router->get( 'user/{id}', function( $response ) {
    $id = $response->getParameter( 'id' );
    include( 'view/user.php' );
});

$router->get( 'project/{project}/subject/{subject}', function( $response ) {
    $project = $response->getParameter( 'project' );
    $subject = $response->getParameter( 'subject' );
    include( 'view/project.php' );
});

$router->status( '404', function() {
    include( 'view/404.php' );
});

$router->open();