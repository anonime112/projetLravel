<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Events\Frontend\Auth\UserRegistered;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Repositories\Frontend\Auth\UserRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Roles;
use App\Models\RoleUser;
/**
 * Class RegisterController.
 */
class RegisterController extends Controller
{
    /**
     * @var UserRepository
     */
    protected UserRepository $userRepository;

    /**
     * RegisterController constructor.
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;

        // Si tu veux empêcher l'accès à l'inscription si désactivée
        // $this->middleware(function ($request, $next) {
        //     abort_unless(config('access.registration'), 404);
        //     return $next($request);
        // });
    }

    /**
     * Redirection après enregistrement.
     */
    public function redirectPath(): string
    {
        return route('shoose_role');
    }

    public function redirectRole(): string
    {
        return route('index');
    }
    /**
     * Affiche le formulaire d'enregistrement.
     */
    public function showRegistrationForm()
    {
        
        return view('frontend.auth.register');
    }

    public function showRoleSelectionForm()
    {
        return view('frontend.auth.choose_role');
    }
    public function showCodeRoleSelectionForm()
    {$roles = Roles::select('id', 'titre')->distinct()->get();
        return view('frontend.auth.code_role',compact('roles'));
    }
    /**
     * Gère la logique d'enregistrement d'un nouvel utilisateur.
     */
    public function register(RegisterRequest $request)
    {
        $user = $this->userRepository->create(
            $request->only('first_name', 'last_name', 'email', 'password')
        );

        // Email de confirmation ou approbation requise
        if (config('access.users.confirm_email') || config('access.users.requires_approval')) {
            event(new UserRegistered($user));

            return redirect($this->redirectPath())->with('flash_success',
                config('access.users.requires_approval') ?
                    __('exceptions.frontend.auth.confirmation.created_pending') :
                    __('exceptions.frontend.auth.confirmation.created_confirm')
                    
            );
        }

        Auth::login($user);

        event(new UserRegistered($user));

        return redirect($this->redirectPath());
    }
}
