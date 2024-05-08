<?php

namespace App\Models;

class ConfidenceInterval
{
    public function __construct(
        protected float $media,
        protected float $stdError
    ){}

    public static function make(float $media, float $stdError): self
    {
        return new self($media, $stdError);
    }

    public function calculate(): array
    {
        return [
            'lower' => number_format(($this->media - $this->stdError), 2, ',', ' '),
            'upper' => number_format(($this->media + $this->stdError), 2, ',', ' ')
        ];
    }
}
