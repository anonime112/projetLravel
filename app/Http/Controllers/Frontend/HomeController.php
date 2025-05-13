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
            if (Auth::user()->role === "admin") {
                
                return redirect()->route('admin.dashboard'); // nom de route recommandé
            }

            return view('frontend.user.dashboard');
        }

        return redirect()->route('frontend.auth.login'); // redirection propre
    }
}
  return redirect()->route('frontend.auth.register'); // redirection propre