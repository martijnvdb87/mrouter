# mRouter

## Quick install
Include the mRouter class into your PHP file

    require_once( 'class/mrouter.class.php' );

Create an instance of the mRouter class

    $router = new mRouter();
    
After adding the different routing functions, it is time to let mRoute do its magic! At the following code:

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
