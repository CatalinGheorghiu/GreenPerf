@extends('layouts.app')

@section('content')
    <div class="container min-vh-100 mt-5 align-middle ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3> Famille equipement <strong
                                class="text-primary">{{ $familleEquipement->fam_equip_code }}</strong></h3>
                    </div>

                    <div class="card-body">
                        <p class="text-primary"> <strong class="text-dark"> ID:</strong>
                            {{ $familleEquipement->id }}
                        </p>
                        <p class="text-primary"> <strong class="text-dark"> CODE EQUIPEMENT:</strong>
                            {{ $familleEquipement->fam_equip_code }}
                        </p>
                        <p class="text-primary"> <strong class="text-dark"> NOM:</strong>
                            {{ $familleEquipement->nom }}
                        </p>


                        <a class="btn btn-dark" href="{{ route('famille_equipements.index') }}">Retourner</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
