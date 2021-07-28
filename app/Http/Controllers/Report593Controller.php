<?php

namespace App\Http\Controllers;

use App\Business\Parser\Report593\Report593Parser;
use Exception;

class Report593Controller extends Controller
{
    private $report;

    public function __construct(Report593Parser $report)
    {
        $this->report = $report;
    }

    public function dashboard() {
        try {
            $fromSource = request('fromSource', false);
            $this->report->parse($fromSource);
            $report = $this->report->getQuestionnaire();
            return view('dashboard', compact('report'));

        } catch (Exception $e) {
            return view('dashboard', ['error' => $e->getMessage()]);
        }
    }
}
