<?php

namespace App\Services;

class Service
{
    public function __construct(
        protected array $validatedBody
    )
    {}

    public static function make(array $validatedBody): self
    {
        return new self($validatedBody);
    }
}
