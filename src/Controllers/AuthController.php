<?php
namespace DarkTec\Starter\Controllers;
use Darktec\Helpers\Blade;
use DarkTec\Http\Controller;
use Darktec\Helpers\Auth;

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

        $login = Auth::login($_POST['username'], $_POST['password']);

        if ($login) {
            header('Location: /dashboard', true, 303);
            exit();
        } else {
            header('Location: /login', true, 303);
        }

    }

    public function logout() {
        Auth::logout();

        header('Location: /', true, 303);
        exit();
    }

    public function registerGet() {

    }

    public function registerPost() {
        
    }
}