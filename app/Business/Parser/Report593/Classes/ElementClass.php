<?php

namespace App\Business\Parser\Report593\Classes;

class ElementClass {

    public $o;
    public $t;
    public $ei;
    public $div_op;
    public $t_op;
    public $ed;


    public function __construct(array $args) {
        foreach (array_keys($args) as $key) {
            if (is_array($args[$key])) {
                $this->ed[] = new ElementDataClass($args[$key]);
            } else {
                $this->$key = $args[$key] ?? null;
            }
        }
    }

}
