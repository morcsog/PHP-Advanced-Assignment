<?php

declare(strict_types=1);

namespace App\ExceptionExample;

use Throwable;

class InvalidNumberException extends \InvalidArgumentException
{
    
    public function __construct(mixed $invalidNumber, Throwable $previous = null)
    {        
        $this->message = 'Expected a valid number, but got: ' . var_export($invalidNumber, true);;
    }
}
