<?php

namespace App\Business\Parser\Report593\Classes;

class QuestionnaireClass {

    public $i;
    public $t;
    public $modules;


    public function __construct(array $args, array $modules) {

        foreach (array_keys($args) as $key) {
            $this->$key = $args[$key] ?? null;
        }

        foreach ($modules as $module) {
            $this->modules[] = new ModuleClass($module);
        }
    }

}
