<?php
namespace DarkTec\Starter\Middleware;

use DarkTec\Http\Middleware;
use DarkTec\Http\Request;
use Darktec\Helpers\Auth;

class AuthGuard extends Middleware {

    public function handle(Request $request) {
        
        if (!Auth::isLoggedIn()) {
            header('Location: /', true, 303);
            exit();
        }
        parent::handle($request);
    }
}