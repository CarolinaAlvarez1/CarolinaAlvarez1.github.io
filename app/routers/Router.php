<?php

class Router
{
    public function dispatch($url)
    {
        $url = trim($url, '/');
        $parts = $url ? explode('/', $url) : [];

        // Controller
        $controllerName = ucfirst($parts[0] ?? 'Home') . 'Controller';
        $controllerFile = "../app/controllers/{$controllerName}.php";

        // Método
        $method = $parts[1] ?? 'index';

        // Parâmetros
        $params = array_slice($parts, 2);

        if (!file_exists($controllerFile)) {
            $this->erro404();
            return;
        }

        require_once $controllerFile;

        if (!class_exists($controllerName)) {
            $this->erro404();
            return;
        }

        $controller = new $controllerName();

        if (!method_exists($controller, $method)) {
            $this->erro404();
            return;
        }

        call_user_func_array([$controller, $method], $params);
    }

    private function erro404()
    {
        header("HTTP/1.0 404 Not Found");
        echo "404 - Página não encontrada";
    }
}
