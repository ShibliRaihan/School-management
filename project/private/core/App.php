<?php

class App
{
    protected $controller = "home";
    protected $method = "index";
    protected $prams = [];
    
    public function __construct(){
        $URL = $this->getURL();
        if (file_exists("../private/controllers/".$URL[0].".php")) {
            $this->controller = strtolower($URL[0]);
            unset($URL[0]);
        }
        require "../private/controllers/".$this->controller.".php";
        $this->controller = new $this->controller();
        if (isset($URL[1]))
        {
            if (method_exists($this->controller,$URL[1]))
            {
                $this->method = $URL[1];
                unset($URL[0]);
            }
        }
        call_user_func([$this->controller,$this->method],$this->prams);
        
    }
    private function getURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        return explode("/",filter_var(trim($url, "/")),FILTER_SANITIZE_URL);
    }
}
