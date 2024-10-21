<?php
namespace Darkmantle\Starter\Controllers;
use Darkmantle\Starter\Helpers\Blade;
use Darktec\Http\Controller;
use DI\Container;



class AuthController extends Controller
{

    private \Lexdubyna\Blade\Blade $blade;

    public function __construct(Blade $blade)
    {
        parent::__construct();
        $this->blade = $blade->getBlade();
    }

    public function loginGet()
    {
        return $this->blade->make('auth.login')->render();
    }

    public function loginPost() {

    }

    public function registerGet() {

    }

    public function registerPost() {
        
    }
}