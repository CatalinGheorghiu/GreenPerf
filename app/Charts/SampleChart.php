<?php

declare(strict_types=1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['Ianuarie', 'Februarie', 'Martie', 'Aprilie', 'Mai', 'Iunie', 'Iulie', 'August', 'Septembrie', 'Octombrie', 'Noiembrie', 'Decembrie'])
            ->dataset('Valoare de referinta', [0.98, 0.23, 0.83, 0.55, 0.75, 0.99, 0.87, 0.55, 0.97, 0.88, 0.91, 0.73])
            ->dataset('Valoare reala ', [0.83, 0.92, 0.91, 0.88, 0.77, 0.79, 0.86, 0.77, 0.98, 0.93, 0.87, 0.81]);
    }
}
