<?php

class Controller
{
    protected function view($view, $viewData = [])
    {
        extract($viewData);
         $vienFile =   __DIR__ . '/../view/'.$view.'.php';
       if(!file_exists($vienFile)){
        throw new Exception("View file not found: ".$vienFile);
       }
        require_once $vienFile;
    }
}
