<?php

namespace App\Business\Parser\Report593\Classes;

class ChoiceOriginClass {

    public $q;
    public $c;


    public function __construct(array $args) {
        foreach (array_keys($args) as $key) {
            $this->$key = $args[$key] ?? null;
        }
    }

}
