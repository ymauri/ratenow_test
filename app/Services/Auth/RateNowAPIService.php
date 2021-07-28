<?php

namespace App\Service\Auth;

use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class RateNowAPIService {

    private $endpoint;
    private $reportId;

    public function __construct(int $reportId) {
        $this->endpoint = config('ratenow.url')."ServerResume/webResult/reportDefinition";
        $this->reportId = $reportId;
    }

    public function reportDefinition(bool $fromSource = false) {
        if ($fromSource) {
            return json_decode(Storage::get('cache/source.json'), true); 
        } else {
            return $this->apiRequest();
        }
    }

    private function apiRequest() {
        $response = Http::withHeaders([
            'Authorization' => "Bearer d4355a1a-289f-47aa-bca9-d5a9d21ebf51"
        ])
        ->get($this->endpoint, [
            'reportId' => $this->reportId
        ]);

        if ($response->successful()) {
            return $response->json();
        } else {
            throw new Exception('Error on reportDefinition API call.');
        }
    }
}
