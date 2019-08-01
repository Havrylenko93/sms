<?php

namespace App\Exceptions;

use Exception;

class WebExceptionsHandler extends Handler
{
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
}