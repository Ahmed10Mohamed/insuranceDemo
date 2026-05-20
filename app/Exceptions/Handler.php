<?php

namespace App\Exceptions;

use App\Traits\ApiResponses;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{
    use ApiResponses;

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
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

    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['success' => false, 'errors' => 'قم بالدخول اولا إلى حسابك', 'code' => 405], 405);
        }

        return redirect('/');
    }

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

    public function render($request, Throwable $exception)
    {
        if ($request->is('api/*')) {
            if ($exception instanceof AuthenticationException) {
                return $this->unauthorizedResponse("Authentication Exception Unauthorized", '401');
            }

            if ($exception instanceof NotFoundHttpException) {
                return $this->notFoundResponse('Route Not Found', '404');
            }

            if ($exception instanceof ModelNotFoundException) {
                return $this->notFoundResponse('Route Not Found', '404');
            }

            if ($exception instanceof Exception) {
                return $this->badRequestResponse($exception->getMessage(), '400');
            }
        } else {
            // Check if debug mode is enabled
            if (config('app.debug')) {
                // Use default Laravel behavior to display detailed error
                return parent::render($request, $exception);
            }

            // Handle specific error pages when APP_DEBUG=false
            if ($this->isHttpException($exception)) {
                /** @var \Symfony\Component\HttpKernel\Exception\HttpExceptionInterface $exception */
                $statusCode = $exception->getStatusCode();

                switch ($statusCode) {
                    case 404:
                        return response()->view('errors.404', [], 404);
                    case 500:
                        return response()->view('errors.500', [], 500);
                    case 403:
                            return response()->view('errors.403', [], 403);
    
                    default:
                        return response()->view('errors.default', ['message' => $exception->getMessage()], $statusCode);
                }
            }

            // Generic error for non-HTTP exceptions
            return response()->view('errors.500', ['message' => 'Unexpected error occurred.'], 500);
        }

        return parent::render($request, $exception);
    }
}
