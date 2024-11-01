<?php

declare(strict_types=1);

namespace App\ExceptionExample;

use Throwable;

class InvalidNumberException extends \InvalidArgumentException
{
    public function __construct(mixed $invalidNumber, Throwable $previous = null)
    {
        $message = 'Expected a valid number, but got: ' . var_export($invalidNumber, true);
        parent::__construct($message, 0, $previous);

    }
}
