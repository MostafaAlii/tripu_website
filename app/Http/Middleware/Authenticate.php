<?php
namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
class Authenticate extends Middleware {
    protected function redirectTo(Request $request) {
        if (!$request->expectsJson()) {
            if ($request->is(app()->getLocale() . '/admin*'))
                return route('admin.login');
            return route('login');
        }
    }
    
}
