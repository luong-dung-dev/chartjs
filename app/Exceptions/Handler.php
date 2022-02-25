<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    // /**
    //  * Render an exception into an HTTP response.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \Exception  $exception
    //  * @return \Illuminate\Http\Response
    //  */
    // public function render($request, Exception $exception)
    // {
    //     // This will replace our 404 response with
    //     // a JSON response.
    //     if ($exception instanceof ModelNotFoundException &&
    //         $request->wantsJson())
    //     {
    //         return response()->json([
    //             'data' => 'Resource not found'
    //         ], 404);
    //     }

    //     return parent::render($request, $exception);
    // }

    // *
    //  * Convert an authentication exception into an unauthenticated response.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \Illuminate\Auth\AuthenticationException  $exception
    //  * @return \Illuminate\Http\Response
     
    // protected function unauthenticated($request, AuthenticationException $exception)
    // {
    //     return response()->json(['error' => 'Unauthenticated.'], 401);
    // }
}
