<?php

namespace Core; 

require_once __DIR__ .'/../config/paths.php';

class Router 
{
    private $routes = [];

   
    // Add GET route
    public function get($uri, $action, $middlewares = [])
    {
        $this->addRoute('GET', $uri, $action, $middlewares);
    }

    // Add POST route
    public function post($uri, $action, $middlewares = [])
    {
        $this->addRoute('POST', $uri, $action, $middlewares);
    }

       

    // Add route with method and middlewares
    private function addRoute($method, $uri, $action, $middlewares = [])
    {
        $uri = trim($uri, '/');
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'action' => $action,
            'middlewares' => $middlewares
        ];
    }

    // Handle route
    public function handle($requestUri, $requestMethod)
    {
        $requestUri = trim($requestUri, '/');

        foreach ($this->routes as $route) {
            $routeUri = $route['uri'];

            // Match static routes and dynamic parameters
            $regex = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_]+)', $routeUri);
            $regex = "#^" . $regex . "$#";

            if ($route['method'] === $requestMethod && preg_match($regex, $requestUri, $matches)) {
                array_shift($matches); // Remove full match from matches
                
                // Run Middlewares
                foreach ($route['middlewares'] as $middleware) {
                    
                    $middlewareInstance = new $middleware();
                    
                    if (!$middlewareInstance->handle()) {
                        return; // Stop if middleware fails
                    }
                }
                
                
                // Call the route action
                if (is_callable($route['action'])) {
                    return call_user_func_array($route['action'], $matches);
                } elseif (is_string($route['action'])) {
                    return $this->callController($route['action'], $matches);
                }
                return;
            }
        }

        // No matching route
        http_response_code(404);
        echo "404 - Not Found";
    }

    // Call controller
    private function callController($action, $params = [])
    {
        
        [$controller, $method] = explode('@', $action);
        $controller = str_replace('.','\\',$controller);
        $controller = "App\\Controllers\\$controller";
        if (class_exists($controller) && method_exists($controller, $method)) {
            $instance = new $controller();
            call_user_func_array([$instance, $method], $params);
        } else {
            http_response_code(500);
            echo "Controller or method not found.";
        }
    }
}
