<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Population;
use App\Models\ConfidenceInterval;

class ConfidenceIntervalController extends Controller
{
    public function calculate(Request $request)
    {
        $is_valid = $request->validate([
            'populationSize' => 'required|integer',
            'values' => 'required|array',
        ]);

        if (!$is_valid) {
            return response()->json([
                'success' => false
            ]);
        } else {
            $population = new Population($request->populationSize, $request->values);
            $media = $population->calcMedia();
            $standardError = $population->calcStdError();
            $standardDeviation = $population->calcStdDeviation();
            $interval = new ConfidenceInterval($media, $standardError);
            return response()->json([
                'success' => true,
                'data' => [
                    'media' => number_format($media, 2, ',', ' '),
                    'standardDeviation' => number_format($standardDeviation, 2, ',', ' '),
                    'standardError' => number_format($standardError, 2, '.', ' '),
                    'interval' => $interval->calculate()
                ]
            ]);
        }


    }
}
