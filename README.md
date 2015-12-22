# Helper Classes
Slim 3 is a very different beast than Slim 2.
These Helper classes will help you migrate or start a new project in Slim 3.
 
 
## BaseAction Example

```php
use \Your\Namespace;

class HelloWorldAction extends Geggleto\Helper\BaseAction {

    public function __construct(ContainerInterface $containerInterface)
    {
        parent::__construct($containerInterface);
    }
    
    public function __invoke (ServerRequestInterface $request, ResponseInterface $response, array $args) {
        $response = $this->view->render($response, "myview.twig", $args); //this will fetch from the container
        return $response;
    
    }

}


class HelloWorldMiddleware extends Geggleto\Helper\BaseMiddleware {

    public function __construct(ContainerInterface $containerInterface)
    {
        parent::__construct($containerInterface);
    }
    
    public function __invoke (ServerRequestInterface $request, ResponseInterface $response, callable $next) {
    
        //Do stuff before your Action
           
        $response = $next($request, $response);
        
        //Do Stuff After Your Action
        
        return $response;
    }

}

```

## Setup/Config
None!

## Usage

HelloWorldAction
```
$app->get('/hello/world', '\Your\Namespace\HelloWorldAction');
```

HellWorldMiddleware
```
$app->add('\Your\Namespace\HelloWorldMiddleware'); 
```

## Container
These classes hold a container instance so you can receive dependencies via $this, just like in Slim 2.
