<?php

namespace DarkTec\Starter\Helpers;
use DarkTec\Starter\Components\Alert;
use DarkTec\Starter\Components\Layout;
use DarkTec\Starter\Components\Forms\LoginForm;

class Blade {

    private static ?\Lexdubyna\Blade\Blade $blade = null;

    public static function getBlade() {

        if (self::$blade == null) {
            self::$blade = new \Lexdubyna\Blade\Blade('views', 'cache');
            self::$blade->compiler()->components([
                'alert' => Alert::class,
                'layout' => Layout::class,
                'loginForm' => LoginForm::class
            ]);
        }

        return self::$blade;
    }
}