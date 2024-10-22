<?php

namespace DarkTec\Starter\Controllers;

use DarkTec\Starter\Helpers\Blade;
use DarkTec\Http\Controller;
use DarkTec\Starter\Helpers\DB;

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
