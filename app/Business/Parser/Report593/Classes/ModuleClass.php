<?php

namespace App\Business\Parser\Report593\Classes;

class ModuleClass {

    public $idm;
    public $o;
    public $ok;
    public $t;
    public $p;
    public $ds;
    public $tp;
    public $ad;
    public $co;
    public $h;
    public $views;


    public function __construct(array $args) {
        foreach (array_keys($args) as $key) {
            if (is_array($args[$key])) {
                $this->views[] = new ViewClass($args[$key][0]);
            } else {
                $this->$key = $args[$key] ?? null;
            }
        }
    }
}
