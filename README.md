# mRouter

## Quick install
Include the mRouter class into your PHP file

    require_once( 'class/mrouter.class.php' );

Create an instance of the mRouter class

    $router = new mRouter();
    
After [adding the routing functions](#add-a-route), it is time to let mRoute do its magic! At the following code:

    $router->open();
    
## HTTP Methods

mRouter supports 5 https methods: `GET`, `POST`, `PUT`, `PATH`, `DELETE`

### Add a route
You can use any HTTP method to create a new route. We will use a `GET` method for this example, however it can be replaced by `POST`, `PUT`, `PATH` or `DELETE`. To make a `GET` request to `https://yoursite.com/contact/` use the following code:

    $router->get( 'contact', function( $response ) {
      // add your actions
    });
    
### Using variables in requests
You are also able to use one or multiple variables in your request. To use a variable in a request you have to use the `{variable}` format

    $router->get( 'user/{id}', function( $response ) {
      // get the value of the 'id' variable
      $id = $response->getParameter( 'id' );
    });

## Status route
Not only can you create routes based on HTTP methods and URLs, you can also create routes based on status codes. This can be usefull to create a 'Page not found' route when no HTTP Method and URL is found. To create a 'Page not found' route, use the following code:

    $router->status( '404', function() {
      // 404 Not Found;
    });
