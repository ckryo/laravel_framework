<?php

namespace Ckryo\Framework\Models;

trait PhotoAttribue {

    protected $attributes = [];

    protected $fractions = [
        'price' => 1000,
        'price_original' => 1000
    ];

    private function isFraction($key) {
        return array_has($this->fractions, $key);
    }

    public function fractionAttribue($key, $value) {
        $unit = $this->fractions[$key];
        $this->attributes[$key] = intval(floatval($value) * $unit);
        return $this;
    }

    public function fractionAttribueValue($key) {
        $unit = $this->fractions[$key];
        return floatval(intval($this->getAttributeFromArray($key)) / $unit);
    }

}