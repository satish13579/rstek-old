<?php

namespace App\Exceptions;
use Illuminate\Http\Request;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    // public function register(): void
    // {
    //     $this->reportable(function (Throwable $e) {
    //         //
    //     });
    // }

    // public function render($request, Throwable $exception)
    // {
    //     // Check if it's an API request and return JSON response
    //     if ($request->expectsJson()) {
    //         // Customize the error message and status code as needed
    //         return response()->json(['error' => 'Resource not found'], 404);
    //     }

    //     // If not an API request, handle the error normally
    //     return parent::render($request, $exception);
    // }

    public function register(): void
    {
        $this->renderable(function (NotFoundHttpException $e, Request $request) {
            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Record not found.'
                ], 404);
            }
        });
    }
}
