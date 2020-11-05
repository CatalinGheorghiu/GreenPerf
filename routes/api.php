<?php

use App\Equipement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\DataTables;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('equipements', function () {
//     return datatables()->of(Equipement::with('familleEquipement'))

//         ->addColumn('familleEquipement', function (Equipement $equipement) {
//             return $equipement->familleEquipement->fam_equip_code;
//         })
//         ->toJson();
// });
