<?php
namespace Darkmantle\Starter\Controllers;
use Darkmantle\Starter\Helpers\Blade;
use Darktec\Http\Controller;
use DI\Container;



class HomeController extends Controller
{

    private \Lexdubyna\Blade\Blade $blade;

    public function __construct(Blade $blade)
    {
        parent::__construct();
        $this->blade = $blade->getBlade();
    }
    public function index()
    {
        return $this->blade->make('homepage', ['name' => 'John Doe'])->render();
    }
}