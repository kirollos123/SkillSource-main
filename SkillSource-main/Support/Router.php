<?php

namespace Support;

require_once 'autoload.php';


class Router {
    private static $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => [],
    ];
    public static function get($url, $handler) {
        static::$routes['GET'][$url] = $handler;
    }

    public static function post($url, $handler) {
        static::$routes['POST'][$url] = $handler;
    }
    public static function put($url, $handler) {
        static::$routes['PUT'][$url] = $handler;
    }
    public static function delete($url, $handler) {
        static::$routes['DELETE'][$url] = $handler;
    }
    public static function view($url, $view) {
        static::$routes['GET'][$url] = fn() => view($view);
    }

    public static function dispatch($url , $verb) {
        foreach (self::$routes[$verb] as $pattern => $handler) {
            // Convert route pattern to a regular expression
            $pattern = str_replace('/', '\/', $pattern);
            $pattern = preg_replace('/\{[^}]+\}/', '([^\/]+)', $pattern); // Accepts any character except '/'
            $pattern = '/^' . $pattern . '$/';
        
            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches); // Remove the full match, keep only the captured groups
        
                // Step 2: Extract parameters (e.g., user_id) from the URL
                if (is_callable($handler)) {
                    // If the handler is a function, pass the extracted parameters
                    call_user_func_array($handler, $matches);
                } else {
                    // Handle controller action with parameters
                    list($controllerName, $methodName) = $handler;
                    $controller = new $controllerName();
        
                    // Step 3: Invoke the controller method with parameters
                    echo call_user_func_array([$controller, $methodName], $matches);
                }
        
                return; // Exit the loop and method once a matching route is found and handled
            }
    }
    return view('errors/404');
}
}
