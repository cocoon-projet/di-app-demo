<?php
namespace Core;
/**
 * Router Class
 */
class Routing
{
    /**
     * listes des routes
     *
     * @var array
     */
    private $routes = [];
    /**
     * GET Route
     *
     * @param string] $uri
     * @param string $handler
     * @return void
     */
    public function get($uri, $handler)
    {
        $this->routes[] = ['httpMethod' => 'GET', 'route' => $uri, 'handler' => $handler];
    }
    /**
     * POST Route
     *
     * @param string $uri
     * @param string $handler
     * @return void
     */
    public function post($uri, $handler)
    {
        $this->routes[] = ['httpMethod' => 'POST', 'route' => $uri, 'handler' => $handler];
    }
    /**
     * PUT Route
     *
     * @param string $uri
     * @param string $handler
     * @return void
     */
    public function put($uri, $handler)
    {
        $this->routes[] = ['httpMethod' => 'PUT', 'route' => $uri, 'handler' => $handler];
    }
    /**
     * DELETE Route
     *
     * @param string $uri
     * @param string $handler
     * @return void
     */
    public function delete($uri, $handler)
    {
        $this->routes[] = ['httpMethod' => 'DELETE', 'route' => $uri, 'handler' => $handler];
    }
    /**
     * Retourne la liste des routes
     *
     * @return void
     */
    private function collection()
    {
        return $this->routes;
    }
    /**
     * Initialise le dispatcher
     *
     * @return void
     */
    private function dispatcher()
    {
        $dispatcher = \FastRoute\simpleDispatcher(function (\FastRoute\RouteCollector $fastRouteCollector) {
            foreach ($this->collection() as $route) {
                $fastRouteCollector->addRoute($route['httpMethod'], $route['route'], $route['handler']);
            }
        });
        return $dispatcher;
    }
    /**
     * Retourne la réponse html
     *
     * @param string $httpMethod
     * @param string $uri
     * @return Response Html Response
     */
    public function dispatch($httpMethod, $uri)
    {
        $routeInfo = $this->dispatcher()->dispatch($httpMethod, $uri);
        
        switch ($routeInfo[0]) {
            case \FastRoute\Dispatcher::NOT_FOUND:
                return Response::html('404 ERROR', 404);
             break;
             case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                return Response::html('405 ERROR', 405);
            break;
            case \FastRoute\Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $vars = $routeInfo[2];
                $dispatch = explode('@', $handler);
                $controller = 'App\Controllers\\' . $dispatch[0];
                $action = $dispatch[1];
                return Response::html(\DI::make($controller, $action, $vars));
            break;
        }
    }
}
