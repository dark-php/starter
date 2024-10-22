<?php

namespace DarkTec\Starter\Components;

use DarkTec\Starter\Helpers\Auth;
use DarkTec\Starter\Helpers\Container;
use Lexdubyna\Blade\ViewComponent;

class Layout extends ViewComponent
{

    public string $appName;
    public string $isAuth;

    protected string $template = 'components.layout';

    public function __construct()
    {
        $container = Container::getInstance();
        $config = $container->get('config'); 
        
        $this->appName = $config['application']['name'];
        $this->isAuth = Auth::isLoggedIn();
    }
}