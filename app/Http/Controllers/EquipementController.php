<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Equipement;
use App\Models\FamilleEquipement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\App;

class EquipementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:manage-users')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $equipements = Equipement::join('famille_equipements', 'famille_equipements.id', '=', 'equipements.famille_equipement_id')
            ->select(['equipements.id', 'equipements.equip_code', 'equipements.designation', 'famille_equipements.fam_equip_code', 'famille_equipements.id AS feID'])
            ->orderBy('equipements.created_at', 'desc');

        if ($request->ajax()) {
            return datatables()->of($equipements)
                ->addColumn('fam_equip_code', function (Equipement $equipement) {
                    return '<a  href="' . route('famille_equipements.show', $equipement->feID) . '">' . $equipement->fam_equip_code . '</a>';
                })
                ->addColumn('btns', 'equipements.actions')
                ->rawColumns(['btns', 'fam_equip_code'])
                ->toJson();
        }
        return view('equipements.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Equipement $equipement)
    {
        $familleEquipements = FamilleEquipement::orderBy('fam_equip_code')->get();

        return view('equipements.create')->with('equipement', $equipement)->with('familleEquipements', $familleEquipements);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $data = $request->validate([
            "famille_equipement_id" => "required|numeric",
            "equip_code" => "required|string|min:3",
            "designation" => "required|string",
        ]);


        $equipement = Equipement::create($data);

        $equipement->save();

        return redirect(route('equipements.index'))->with('success', "L'equipement $equipement->equip_code a été créé avec succès!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function show(Equipement $equipement)
    {
        return view('equipements.show')->with('equipement', $equipement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipement $equipement)
    {
        $familleEquipements = FamilleEquipement::orderBy('fam_equip_code')->get();

        return view('equipements.edit')->with('equipement', $equipement)->with('familleEquipements', $familleEquipements);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipement $equipement)
    {
        $data = $request->validate([
            'equip_code' => 'required',
            'designation' => 'required'
        ]);
        $equipement->update($data);

        return redirect('equipements/' . $equipement->id)->with("success", "L'equipement $equipement->id a été mis a jour! ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipement $equipement)
    {
        if (Gate::denies('delete-users')) {
            return redirect(route('admin.users.index'));
        }

        $equip = Equipement::findOrFail($equipement->id);
        $equip->delete();

        return redirect()->route('equipements.index')->with("warning", "L'equipement $equipement->id a été supprimé! ");
    }
}
