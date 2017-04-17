<?php
/**
 * The application's route middleware groups.
 *
 * @var array
 */
\Larakit\Boot::register_middleware(\Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class);
\Larakit\Boot::register_middleware(\Illuminate\Foundation\Http\Middleware\ValidatePostSize::class);
\Larakit\Boot::register_middleware(\App\Http\Middleware\TrimStrings::class);
\Larakit\Boot::register_middleware(\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class);

/**
 * The application's global HTTP middleware stack.
 *
 * These middleware are run during every request to your application.
 *
 * @var array
 */
\Larakit\Boot::register_middleware_group('web', [
    \App\Http\Middleware\EncryptCookies::class,
    \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
    \Illuminate\Session\Middleware\StartSession::class,
    // \Illuminate\Session\Middleware\AuthenticateSession::class,
    \Illuminate\View\Middleware\ShareErrorsFromSession::class,
    \App\Http\Middleware\VerifyCsrfToken::class,
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
]);
\Larakit\Boot::register_middleware_group('api', [
    'throttle:60,1',
    'bindings',
]);



/**
 * The application's route middleware.
 *
 * These middleware may be assigned to groups or used individually.
 *
 * @var array
 */
\Larakit\Boot::register_middleware_route('auth', \Illuminate\Auth\Middleware\Authenticate::class);
\Larakit\Boot::register_middleware_route('auth.basic', \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class);
\Larakit\Boot::register_middleware_route('bindings', \Illuminate\Routing\Middleware\SubstituteBindings::class);
\Larakit\Boot::register_middleware_route('can', \Illuminate\Auth\Middleware\Authorize::class);
\Larakit\Boot::register_middleware_route('guest', \App\Http\Middleware\RedirectIfAuthenticated::class);
\Larakit\Boot::register_middleware_route('throttle', \Illuminate\Routing\Middleware\ThrottleRequests::class);