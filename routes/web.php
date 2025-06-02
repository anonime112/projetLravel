<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\EtudiantController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\Auth\ConfirmAccountController;
use App\Http\Controllers\Frontend\Auth\ForgotPasswordController;
use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\Auth\PasswordExpiredController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Http\Controllers\Frontend\Auth\ResetPasswordController;
use App\Http\Controllers\Frontend\Auth\SocialLoginController;
use App\Http\Controllers\Frontend\Auth\UpdatePasswordController;

use App\Http\Controllers\Auth\User\UserStatusController;
use App\Http\Controllers\Auth\User\UserController;
use App\Http\Controllers\Auth\User\UserConfirmationController;
use App\Http\Controllers\Auth\User\UserSocialController;
use App\Http\Controllers\Auth\User\UserPasswordController;
use App\Http\Controllers\Auth\User\UserAccessController;
use App\Http\Controllers\Auth\User\UserSessionController;
use App\Http\Controllers\Auth\Role\RoleController;
use App\Http\Controllers\Backend\Ui\UiController;
use App\Http\Controllers\Backend\Chart\ChartController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllerss\Backend\Setting\SettingController;
use App\Http\Controllers\Backend\Auth\Table\TableController;

use App\Http\Controllers\DemandeController;
use App\Http\Controllers\GenPDFController;
use App\Http\Controllers\Frontend\User\ProfileController;
/*
|--------------------------------------------------------------------------
| Global Routes
|--------------------------------------------------------------------------
*/

// Switch between the included languages
Route::prefix('')->name('frontend.')->group(function () {


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

});


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('lang/{lang}', [LanguageController::class, 'swap']);
Route::get('/index', [HomeController::class, 'index'])->name('frontend.index');
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::prefix('')->name('frontend.')->group(function () {

    Route::prefix('')->name('auth.')->group(function () {

        // Authenticated routes
        Route::middleware('auth')->group(function () {
            Route::get('logout', [LoginController::class, 'logout'])->name('logout');

            Route::middleware('password_expires')->group(function () {
                Route::patch('password/update', [UpdatePasswordController::class, 'update'])->name('password.update');
            });

            Route::get('password/expired', [PasswordExpiredController::class, 'expired'])->name('password.expired');
            Route::patch('password/expired', [PasswordExpiredController::class, 'update'])->name('password.expired.update');
        });

        // Guest routes
        Route::middleware('guest')->group(function () {
            // Login
            Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
            Route::post('login', [LoginController::class, 'login'])->name('login.post');

            // Social login
            Route::get('login/{provider}', [SocialLoginController::class, 'login'])->name('social.login');
            Route::get('login/{provider}/callback', [SocialLoginController::class, 'login']);

            // Register
            Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
            Route::post('register', [RegisterController::class, 'register'])->name('register.post');

            // Account confirmation
            Route::get('account/confirm/{token}', [ConfirmAccountController::class, 'confirm'])->name('account.confirm');
            Route::get('account/confirm/resend/{uuid}', [ConfirmAccountController::class, 'sendConfirmationEmail'])->name('account.confirm.resend');

            // Password reset
            Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.email');
            Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email.post');

            Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset.form');
            Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.reset');
        });
    });

});

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Backend\DashboardController; // à adapter

Route::prefix('admin')->name('admin.')->group(function () {
    // Exemple de route admin
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/dashboard/secre1', [DashboardController::class, 'secre1'])->name('secre1.dashboard');
Route::get('/dashboard/secre2', [DashboardController::class, 'secre2'])->name('secre2.dashboard');
Route::get('/dashboard/dirc1', [DashboardController::class, 'dirc1'])->name('dirc1.dashboard');
Route::get('/dashboard/dirc2', [DashboardController::class, 'dirc2'])->name('dirc2.dashboard');

Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
    // User Dashboard Specific
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // User Account Specific
    Route::get('account', [AccountController::class, 'index'])->name('account');

    // User Profile Specific
    Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
});



// SECTION SECRETAIRE 1
Route::prefix('table')->name('table.')->group(function () {
    Route::get('table_secretaire1', [DemandeController::class, 'index1'])->name('secre1');

});



// SECTION SECRETAIRE 2
        
Route::prefix('table')->name('table.')->group(function () {
    Route::get('table_secretaire', [DemandeController::class, 'index'])->name('secre2');

});
Route::get('/demandes', [DemandeController::class, 'index'])->name('demandes.index');
Route::get('/demandes/{id}', [DemandeController::class, 'show'])->name('demandes.show');
Route::post('/demandes/{id}/valider', [DemandeController::class, 'valider'])->name('demandes.valider');


Route::post('/demandes/{id}/valider-statut', [DemandeController::class, 'validerStatut'])->name('demandes.validerStatut');


Route::post('/demandes/{id}/decliner', [DemandeController::class, 'decliner'])->name('demandes.decliner');

Route::get('/demandes/{id}/document', [GenPDFController::class, 'telechargerPdf'])->name('demande.document');


// SECTION DIRECTION 1
Route::prefix('table')->name('table.')->group(function () {
    Route::get('table_demande', [DemandeController::class, 'index_dirc'])->name('dirc1');

});







Route::prefix('admin')->name('admin.')->group(function () {
Route::prefix('auth')
    ->as('auth.')
    ->middleware('role:administrator')
    ->group(function () {
        Route::resource('setting', SettingController::class)->except(['show']);
        Route::prefix('setting')->name('setting.')->group(function () {
      
        Route::get('settingU', [SettingController::class, 'update'])->name('update');

        });
        

        Route::prefix('map')->name('map.')->group(function () {
        Route::get('mapGoogle', [MapController::class, 'mapGoogle'])->name('google');
        Route::get('mapYandex', [MapController::class, 'mapYandex'])->name('yandex');
        Route::get('mapJvectormap', [MapController::class, 'mapJvectormap'])->name('jvectormap');
    });
        Route::prefix('page')->name('page.')->group(function () {
        Route::get('blank', [PageController::class, 'blank'])->name('blank');
        Route::get('profile', [PageController::class, 'profile'])->name('profile');
        Route::get('profile2', [PageController::class, 'profile2'])->name('profile2');
        Route::get('gallery', [PageController::class, 'gallery'])->name('gallery');
        Route::get('gallery2', [PageController::class, 'gallery2'])->name('gallery2');
        Route::get('timeline', [PageController::class, 'timeline'])->name('timeline');
        Route::get('timelineH', [PageController::class, 'timelineH'])->name('timeline_h');
        Route::get('pricing', [PageController::class, 'pricing'])->name('pricing');
        Route::get('invoices', [PageController::class, 'invoices'])->name('invoices');
        Route::get('invoices2', [PageController::class, 'invoices2'])->name('invoices2');
        Route::get('results', [PageController::class, 'results'])->name('results');
        Route::get('helperClass', [PageController::class, 'helperClass'])->name('helper');
        Route::get('board', [PageController::class, 'board'])->name('board');
        Route::get('list', [PageController::class, 'list'])->name('list');
        Route::get('maintenance', [PageController::class, 'maintenance'])->name('maintenance');
        Route::get('testimonials', [PageController::class, 'testimonials'])->name('testimonials');
        Route::get('faq', [PageController::class, 'faq'])->name('faq'); });











        Route::prefix('table')->name('table.')->group(function () {
        
        Route::get('table_secretaire', [TableController::class, 'tablesecretaire'])->name('secre2');

        Route::get('tableBasic', [TableController::class, 'tableBasic'])->name('basic');
        Route::get('normal', [TableController::class, 'normal'])->name('normal');
        Route::get('datatable', [TableController::class, 'datatable'])->name('datatable');
        Route::get('editable', [TableController::class, 'editable'])->name('editable');
        Route::get('color', [TableController::class, 'color'])->name('color');
        Route::get('filter', [TableController::class, 'filter'])->name('filter');
        Route::get('dragger', [TableController::class, 'dragger'])->name('dragger');   

        });





        Route::prefix('form')->name('form.')->group(function () {
        Route::get('validation', [FormController::class, 'validation'])->name('validation');
        Route::get('advanced', [FormController::class, 'advanced'])->name('advanced');
        Route::get('basic', [FormController::class, 'basic'])->name('basic');
        Route::get('wizard', [FormController::class, 'wizard'])->name('wizard');
        Route::get('dragdropupload', [FormController::class, 'dragdropupload'])->name('dragdropupload');
        Route::get('cropping', [FormController::class, 'cropping'])->name('cropping');
        Route::get('summernote', [FormController::class, 'summernote'])->name('summernote');
        Route::get('editors', [FormController::class, 'editors'])->name('editors');
        Route::get('markdown', [FormController::class, 'markdown'])->name('markdown');
    
    });
        
     Route::prefix('chart')->name('chart.')->group(function () {
        Route::get('apex', [ChartController::class, 'apex'])->name('apex');
        Route::get('c3', [ChartController::class, 'c3'])->name('c3');
        Route::get('morris', [ChartController::class, 'morris'])->name('morris');
        Route::get('flot', [ChartController::class, 'flot'])->name('flot');
        Route::get('chartJs', [ChartController::class, 'chartJs'])->name('chartjs');
        Route::get('knob', [ChartController::class, 'knob'])->name('knob');
        Route::get('sparkline', [ChartController::class, 'sparkline'])->name('sparkline');
        Route::get('peity', [ChartController::class, 'peity'])->name('peity');
        Route::get('gauges', [ChartController::class, 'gauges'])->name('gauges');
    });

        Route::prefix('ui')->name('ui.')->group(function () {
            Route::get('typoGraphy', [UiController::class, 'typoGraphy'])->name('typography');
            Route::get('tabs', [UiController::class, 'tabs'])->name('tabs');
            Route::get('buttons', [UiController::class, 'buttons'])->name('buttons');
            Route::get('bootstrap', [UiController::class, 'bootstrap'])->name('bootstrap');
            Route::get('icons', [UiController::class, 'icons'])->name('icons');
            Route::get('notifications', [UiController::class, 'notifications'])->name('notifications');
            Route::get('colors', [UiController::class, 'colors'])->name('colors');
            Route::get('dialogs', [UiController::class, 'dialogs'])->name('dialogs');
            Route::get('listGroup', [UiController::class, 'listGroup'])->name('list_group');
            Route::get('mediaObject', [UiController::class, 'mediaObject'])->name('media_object');
            Route::get('modals', [UiController::class, 'modals'])->name('modals');
            Route::get('nestable', [UiController::class, 'nestable'])->name('nestable');
            Route::get('progressBars', [UiController::class, 'progressBars'])->name('progressbars');
            Route::get('rangeSliders', [UiController::class, 'rangeSliders'])->name('range_sliders');
            Route::get('treeview', [UiController::class, 'treeview'])->name('treeview');
        });
    
        /*
         * User Management
         */
        Route::prefix('user')
            ->as('user.')
            ->middleware('role:administrator')
            ->group(function () {

                // User Status
                Route::get('deactivated', [UserStatusController::class, 'getDeactivated'])->name('deactivated');
                Route::get('deleted', [UserStatusController::class, 'getDeleted'])->name('deleted');

                // User CRUD
                Route::resource('/', UserController::class)->parameters(['' => 'user']);

                // Specific user actions
                Route::prefix('{user}')->group(function () {
                    // Account
                    Route::get('account/confirm/resend', [UserConfirmationController::class, 'sendConfirmationEmail'])->name('account.confirm.resend');

                    // Status
                    Route::get('mark/{status}', [UserStatusController::class, 'mark'])
                        ->where('status', '[0,1]')
                        ->name('mark');

                    // Social
                    Route::delete('social/{social}/unlink', [UserSocialController::class, 'unlink'])->name('social.unlink');

                    // Confirmation
                    Route::get('confirm', [UserConfirmationController::class, 'confirm'])->name('confirm');
                    Route::get('unconfirm', [UserConfirmationController::class, 'unconfirm'])->name('unconfirm');

                    // Password
                    Route::get('password/change', [UserPasswordController::class, 'edit'])->name('change-password');
                    Route::patch('password/change', [UserPasswordController::class, 'update'])->name('change-password.post');

                    // Access
                    Route::get('login-as', [UserAccessController::class, 'loginAs'])->name('login-as');

                    // Session
                    Route::get('clear-session', [UserSessionController::class, 'clearSession'])->name('clear-session');

                    // Deleted
                    Route::get('delete', [UserStatusController::class, 'delete'])->name('delete-permanently');
                    Route::get('restore', [UserStatusController::class, 'restore'])->name('restore');
                });
            });

        /*
         * Role Management
         */
        Route::prefix('role')
            ->as('role.')
            ->middleware('role:administrator')
            ->group(function () {
                Route::get('remove/{id}', [RoleController::class, 'destroy'])->name('remove');
                Route::resource('/', RoleController::class)->except(['show']);
            });

            Route::prefix('app')->middleware('role:administrator')->controller(AppController::class)->group(function () {
                Route::get('inbox', 'inbox')->name('app.inbox');
                Route::get('chat', 'chat')->name('app.chat');
                Route::get('calendar', 'calendar')->name('app.calendar');
                Route::get('contact', 'contact')->name('app.contact');
                Route::get('contactGrid', 'contactGrid')->name('app.contact_grid');
                Route::get('taskboard', 'taskboard')->name('app.taskboard');
                Route::get('blogDashboard', 'blogDashboard')->name('app.blog_dashboard');
                Route::get('blogPost', 'blogPost')->name('app.blog_post');
                Route::get('blogList', 'blogList')->name('app.blog_list');
                Route::get('blogDetails', 'blogDetails')->name('app.blog_details');
                Route::get('fileDashboard', 'fileDashboard')->name('app.file_dashboard');
                Route::get('fileDocuments', 'fileDocuments')->name('app.file_documents');
                Route::get('fileMedia', 'fileMedia')->name('app.file_media');
                Route::get('fileImages', 'fileImages')->name('app.file_images');
            });


            Route::prefix('widget')->middleware('role:administrator')->controller(WidgetController::class)->group(function () {
                Route::get('widgetStatistics', 'widgetStatistics')->name('widget.widget_statistics');
                Route::get('widgetData', 'widgetData')->name('widget.widget_data');
                Route::get('widgetChart', 'widgetChart')->name('widget.widget_chart');
                Route::get('widgetWeather', 'widgetWeather')->name('widget.widget_weather');
                Route::get('widgetSocial', 'widgetSocial')->name('widget.widget_social');
                Route::get('widgetBlog', 'widgetBlog')->name('widget.widget_blog');
                Route::get('widgeteCommerce', 'widgeteCommerce')->name('widget.widget_ecommerce');
            });
        });

      
    
    /*
     * Page Management
     */
 
         

// All route names are prefixed with 'admin.'.
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('h_menu', [DashboardController::class, 'h_menu'])->name('h_menu');
Route::get('iot', [DashboardController::class, 'iot'])->name('iot');
Route::get('demographic', [DashboardController::class, 'demographic'])->name('demographic');
Route::get('project_board', [DashboardController::class, 'project_Board'])->name('project_board');
Route::get('crypto_dashboard', [DashboardController::class, 'crypto_Dashboard'])->name('crypto_dashboard');
Route::get('eCommerce', [DashboardController::class, 'eCommerce'])->name('eCommerce');
    });


  







    use App\Http\Controllers\PageControll;




    Route::prefix('home/requests')->name('requests.')->group(function () {
        Route::get('/index', [PageControll::class, 'show'])->defaults('page', 'index')->name('index');
        Route::get('/about-us', [PageControll::class, 'show'])->defaults('page', 'about-us')->name('about-us');
        Route::get('/application-form', [PageControll::class, 'show'])->defaults('page', 'application-form')->name('application-form');
        Route::get('/news-and-blog', [PageControll::class, 'show'])->defaults('page', 'news-and-blog')->name('news-and-blog');
        Route::get('/blog-details', [PageControll::class, 'show'])->defaults('page', 'blog-details')->name('blog-details');
        Route::get('/alumni', [PageControll::class, 'show'])->defaults('page', 'alumni')->name('alumni');
        Route::get('/academics', [PageControll::class, 'show'])->defaults('page', 'academics')->name('academics');
        Route::get('/undergraduate', [PageControll::class, 'show'])->defaults('page', 'undergraduate')->name('undergraduate');
        Route::get('/graduate', [PageControll::class, 'show'])->defaults('page', 'graduate')->name('graduate');
        Route::get('/online-education', [PageControll::class, 'show'])->defaults('page', 'online-education')->name('online-education');
        Route::get('/faculty', [PageControll::class, 'show'])->defaults('page', 'faculty')->name('faculty');
        Route::get('/admission', [PageControll::class, 'show'])->defaults('page', 'admission')->name('admission');
        Route::get('/how-to-apply', [PageControll::class, 'show'])->defaults('page', 'how-to-apply')->name('how-to-apply');
        Route::get('/tuition-fees', [PageControll::class, 'show'])->defaults('page', 'tuition-fees')->name('tuition-fees');
        Route::get('/financial-aid', [PageControll::class, 'show'])->defaults('page', 'financial-aid')->name('financial-aid');
        Route::get('/date-deadlines', [PageControll::class, 'show'])->defaults('page', 'date-deadlines')->name('date-deadlines');
        Route::get('/schedule-tour', [PageControll::class, 'show'])->defaults('page', 'schedule-tour')->name('schedule-tour');
        Route::get('/courses', [PageControll::class, 'show'])->defaults('page', 'courses')->name('courses');
        Route::get('/courses-details', [PageControll::class, 'show'])->defaults('page', 'courses-details')->name('courses-details');
        Route::get('/university-life', [PageControll::class, 'show'])->defaults('page', 'university-life')->name('university-life');
        Route::get('/the-campus-experience', [PageControll::class, 'show'])->defaults('page', 'the-campus-experience')->name('the-campus-experience');
        Route::get('/fitness-athletics', [PageControll::class, 'show'])->defaults('page', 'fitness-athletics')->name('fitness-athletics');
        Route::get('/support-guidance', [PageControll::class, 'show'])->defaults('page', 'support-guidance')->name('support-guidance');
        Route::get('/student-activities', [PageControll::class, 'show'])->defaults('page', 'student-activities')->name('student-activities');
        Route::get('/contact-us', [PageControll::class, 'show'])->defaults('page', 'contact-us')->name('contact-us');
        Route::get('/home-two', [PageControll::class, 'show'])->defaults('page', 'home-two')->name('home-two');
        Route::get('/home-three', [PageControll::class, 'show'])->defaults('page', 'home-three')->name('home-three');
    });
    