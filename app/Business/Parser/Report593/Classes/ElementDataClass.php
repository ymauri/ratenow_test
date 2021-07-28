<?php

namespace App\Business\Parser\Report593\Classes;

class ElementDataClass {

    public $o;
    public $t;
    public $ops;
    public $c;
    public $so;


    public function __construct(array $args) {
        foreach (array_keys($args) as $key) {
            if (is_array($args[$key])) {
                $this->so[] = new ChoiceOriginClass($args[$key][0]);
            } else {
                $this->$key = $args[$key] ?? null;
            }
        }
    }
}
