<?php

namespace App\Business\Parser\Report593;

use App\Business\Parser\Report593\Classes\QuestionnaireClass;
use App\Service\Auth\RateNowAPIService;

class Report593Parser {

    private $service;
    private $questionnaire;


    public function __construct() {
        $this->service = new RateNowAPIService(593);
    }

    public function parse(bool $fromSource = false) {
        $dataReport = $this->service->reportDefinition($fromSource);
        if (count($dataReport) > 0) {
            $this->questionnaire = new QuestionnaireClass($dataReport['qn'][0], $dataReport["mo"]);
        }
    }

    public function getQuestionnaire() {
        return $this->questionnaire;
    }
}
