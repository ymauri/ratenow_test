<?php

namespace App\Business\Parser\Report593\Classes;

class ViewClass {

    public $o;
    public $bt;
    public $c_op;
    public $b_op;
    public $ec_op;
    public $eb_op;
    public $nuei;
    public $nuef;
    public $e;


    public function __construct(array $args) {
        foreach (array_keys($args) as $key) {
            if (is_array($args[$key])) {
                $this->e[] = new ElementClass($args[$key]);
            } else {
                $this->$key = $args[$key] ?? null;
            }
        }
    }

}
