<?php

namespace App\Http;

use App\Http\Middleware\Authenticate;
use App\Http\Middleware\CheckForMaintenanceMode;
use App\Http\Middleware\CheckVisitorCookie;
use App\Http\Middleware\CountUniqueVisitors;
use App\Http\Middleware\EncryptCookies;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\TrimStrings;
use App\Http\Middleware\TrustProxies;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Auth\Middleware\RequirePassword;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull;
use Illuminate\Foundation\Http\Middleware\ValidatePostSize;
use Illuminate\Http\Middleware\SetCacheHeaders;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Illuminate\Routing\Middleware\ValidateSignature;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        TrustProxies::class,
        CheckForMaintenanceMode::class,
        ValidatePostSize::class,
        TrimStrings::class,
        ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            EncryptCookies::class,
            AddQueuedCookiesToResponse::class,
            StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            ShareErrorsFromSession::class,
            VerifyCsrfToken::class,
            SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => Authenticate::class,
        'auth.basic' => AuthenticateWithBasicAuth::class,
        'bindings' => SubstituteBindings::class,
        'cache.headers' => SetCacheHeaders::class,
        'can' => Authorize::class,
        'guest' => RedirectIfAuthenticated::class,
        'password.confirm' => RequirePassword::class,
        'signed' => ValidateSignature::class,
        'throttle' => ThrottleRequests::class,
        'verified' => EnsureEmailIsVerified::class,
        'cookie.check' => CheckVisitorCookie::class,
        'counter' => CountUniqueVisitors::class
        //'city' => \App\Http\Middleware\CheckCity::class,
    ];

    /**
     * The priority-sorted list of middleware.
     *
     * This forces non-global middleware to always be in the given order.
     *
     * @var array
     */
    protected $middlewarePriority = [
        StartSession::class,
        ShareErrorsFromSession::class,
        Authenticate::class,
        ThrottleRequests::class,
        AuthenticateSession::class,
        SubstituteBindings::class,
        Authorize::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $redis = Redis::connection();
            $today_visits = DB::select('select visitors from daily_visits where `date` = :date', ['date' => date('Y-m-d')]);

            if ($today_visits == null) {
                $current_visits = $redis->get(str_replace('brightpark_database_', '', date('Y-m-d')));

                if ($current_visits == null) {
                    $current_visits = 0;
                }

                DB::insert('insert into daily_visits (date, visitors) values (:date, :visitors)',
                    ['date' => date('Y-m-d'), 'visitors' => $current_visits]);
            } else {
                $current_visits = $redis->get(str_replace('brightpark_database_', '', date('Y-m-d')));

                if ($current_visits == null) {
                    $current_visits = 0;
                }

                DB::update('update daily_visits set `visitors` = :visitors where `date` = :date',
                    ['date' => date('Y-m-d'), 'visitors' => ($current_visits + $today_visits)]);
            }
        })->everyTenMinutes();

        $schedule->call(function () {
            $redis = Redis::connection();

            $button_keys = $redis->keys('*btn*');

            foreach ($button_keys as $button_key) {
                $button_event = json_decode($redis->get(str_replace('brightpark_database_', '', $button_key)));
                var_dump($button_event->timestamp);

                DB::insert('insert into button_events (`timestamp`, button_id, user_ip, href, location)
                            values (:timestamp, :button_id, :user_ip, :href, :location )',
                    ['timestamp' => $button_event->timestamp,
                        'button_id' => $button_event->btn_id,
                        'user_ip' => $button_event->user_ip,
                        'href' => $button_event->href,
                        'location' => $button_event->location]);

                $redis->del(str_replace('brightpark_database_', '', $button_key));
            }

        })->everyFifteenMinutes();
    }
}
