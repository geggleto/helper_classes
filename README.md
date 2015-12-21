# TheSlimCollective  Helper Classes
Slim 3 is a very different beast than Slim 2.
These Helper classes will help you migrate or start a new project in Slim 3.
 
 
## BaseAction Example

```php
use \Your\Namespace;

class HelloWorldAction extends TheSlimCollective\Helper\BaseAction {

    public function __construct(ContainerInterface $containerInterface)
    {
        parent::__construct($containerInterface);
    }
    
    public function __invoke (ServerRequestInterface $request, ResponseInterface $response, array $args) {
    
        return $response->write("Hello, World");
    
    }

}


class HelloWorldMiddleware extends TheSlimCollective\Helper\BaseMiddleware {

    public function __construct(ContainerInterface $containerInterface)
    {
        parent::__construct($containerInterface);
    }
    
    public function __invoke (ServerRequestInterface $request, ResponseInterface $response, callable $next) {
        return $next($request, $response);
    }

}

```

## Setup/Config
None!

## Usage

HelloWorldAction
```$app->get('/hello/world', '\Your\Namespace\HelloWorldAction');```

HellWorldMiddleware
```$app->add('\Your\Namespace\HelloWorldMiddleware');```

## Container
These classes hold a container instance so you can receive dependencies via $this, just like in Slim 2.