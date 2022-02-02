<?php

namespace Sajid\UnitConversions;

class Weight
{
    private float $killograms;

    public static function fromKilograms(float $killograms): self
    {
        return new static($killograms);
    }

    public function __construct(float $killograms)
    {
        $this->killograms = $killograms;
    }

    public function toLbs()
    {
        return $this->killograms * 2.204623;
    }


}