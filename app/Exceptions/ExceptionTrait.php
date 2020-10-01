<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\component\HttpKernel\Exception\NotFoundHttpException;

trait ExceptionTrait
{
    public function apiException($request, $e)
    {
        if ($e instanceof ModelNotFoundException) {
            return response()->json([
                'error' => 'Product not found',
            ], Response::HTTP_NOT_FOUND);
        } elseif ($e instanceof NotFoundHttpException) {
            return response()->json([
                'error' => 'Route not found',
            ], Response::HTTP_NOT_FOUND);
        }
    }
}
