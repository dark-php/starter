<?php
namespace DarkTec\Starter\Middleware;

use DarkTec\Http\Middleware;
use DarkTec\Http\Request;
use DarkTec\Starter\Helpers\Auth;

class AdminGuard extends Middleware {

    public function handle(Request $request) {
        parent::handle($request);
    }
}