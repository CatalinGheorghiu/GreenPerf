<?php

namespace App\Http\Controllers;

use App\Models\Equipement;
use App\Models\FamilleEquipement;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FamilleEquipementController extends Controller
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

        $famille_equipements = FamilleEquipement::orderBy('fam_equip_code')
            ->get();
        if ($request->ajax()) {
            return datatables()->of($famille_equipements)
                ->addColumn('btns', 'famille_equipements.actions')
                ->rawColumns(['btns'])
                ->toJson();
        }
        return view('famille_equipements.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('famille_equipements.create');
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
            "fam_equip_code" => "required|string|min:2|max:3|unique:famille_equipements,fam_equip_code",
            "nom" => "required|string",
        ]);


        $famille_equipement = FamilleEquipement::create($data);

        $famille_equipement->save();

        return redirect(route('famille_equipements.index'))->with('success', "Famille d'equipement $famille_equipement->fam_equip_code a été créé avec succès!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FamilleEquipement  $familleEquipement
     * @return \Illuminate\Http\Response
     */
    public function show(FamilleEquipement $familleEquipement)
    {
        return view('famille_equipements.show')->with('familleEquipement', $familleEquipement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FamilleEquipement  $familleEquipement
     * @return \Illuminate\Http\Response
     */
    public function edit(FamilleEquipement $familleEquipement)
    {

        return view('famille_equipements.edit')->with('familleEquipement', $familleEquipement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FamilleEquipement  $familleEquipement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FamilleEquipement $familleEquipement)
    {
        $data = $request->validate([
            "fam_equip_code" => "required|string|min:2|max:3|unique:famille_equipements,fam_equip_code,$familleEquipement->id",
            "nom" => "required|string",
        ]);
        $familleEquipement->update($data);

        return redirect('famille_equipements/' . $familleEquipement->id)->with("success", "L'equipement $familleEquipement->fam_equip_code a été mis a jour! ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FamilleEquipement  $familleEquipement
     * @return \Illuminate\Http\Response
     */
    public function destroy(FamilleEquipement $familleEquipement)
    {
        if (Gate::denies('delete-users')) {
            return redirect(route('admin.users.index'));
        }

        $famille_equipement = FamilleEquipement::findOrFail($familleEquipement->id);
        $famille_equipement->delete();

        return redirect()->route('famille_equipements.index')->with("warning", "Famille d'equipement $familleEquipement->fam_equip_code a été supprimé! ");
    }
}
