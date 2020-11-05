<?php

declare(strict_types=1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class EquipementsChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $dates_array = [];
        $seuil_alerte_array = [];
        $valeur_reference_array = [];
        $valeur_constatee_array = [];

        $path = storage_path() . "/chart2.json";
        $json = json_decode(file_get_contents($path), true);
        foreach ($json as $value) {
            array_push($dates_array, $value['current']);
            array_push($seuil_alerte_array, $value['valeur_constatee']);
            array_push($valeur_reference_array, $value['valeur_reference']);
            array_push($valeur_constatee_array, $value['seuil_alerte']);
        }
        return Chartisan::build()
            ->labels([...$dates_array])
            ->dataset('Valeur Constatee', [...$valeur_constatee_array])
            ->dataset('Valeur Reference', [...$valeur_reference_array])
            ->dataset('Seuil Alerte', [...$seuil_alerte_array]);
    }
}
