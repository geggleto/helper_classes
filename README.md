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
```

## Setup/Config
None!

## Usage
$app->get('/hello/world', '\Your\Namespace\HelloWorldAction');

## Container
These Action classes hold a container instance so you can receive dependencies