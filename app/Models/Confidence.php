<?php

namespace App\Models;

class Confidence
{
    public function __construct(
        protected int $value
    ){}

    public static function make(int $value): self
    {
        return new static($value);
    }

    public function calculate(): float
    {
        return (100 - $this->value) / 100;
    }
}
