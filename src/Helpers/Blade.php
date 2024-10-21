<?php

namespace Darkmantle\Starter\Helpers;
use Darkmantle\Starter\Components\Alert;
use Darkmantle\Starter\Components\Layout;

class Blade {

    private \Lexdubyna\Blade\Blade $blade;

    public function __construct() {
        $this->blade = new \Lexdubyna\Blade\Blade('views', 'cache');
        $this->blade->compiler()->components([
            'alert' => Alert::class,
            'layout' => Layout::class
        ]);
    }

    public function getBlade() {
        return $this->blade;
    }
}