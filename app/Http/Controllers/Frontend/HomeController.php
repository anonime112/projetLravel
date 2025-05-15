<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * Display the frontend dashboard or redirect based on permissions.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index(Request $request) {
        
        if (Auth::check()) {
            $role = Auth::user()->role;

            $redirectRoutes = [
                'admin'    => 'admin.dashboard',
                'secre1'   => 'secre1.dashboard',
                'secre2'   => 'secre2.dashboard',
                'dirc1'    => 'dirc1.dashboard',
                'dirc2'    => 'dirc2.dashboard',
            ];

            // Redirection en fonction du rôle
            if (array_key_exists($role, $redirectRoutes)) {
                return redirect()->route($redirectRoutes[$role]);
            }

            return view('frontend.user.dashboard');
        }

        return redirect()->route('frontend.auth.login'); // redirection propre
    }
}
  return redirect()->route('frontend.auth.register'); // redirection propre