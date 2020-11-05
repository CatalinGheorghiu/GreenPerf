@extends('layouts.app')

@section('content')

    <div class="container align-middle mt-5 min-vh-100">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3> Equipement <strong class="text-primary">{{ $equipement->equip_code }}</strong>
                        </h3>
                    </div>

                    <div class="card-body">
                        <p class="text-primary"> <strong class="text-dark"> ID:</strong> {{ $equipement->id }}</p>
                        <p class="text-primary"> <strong class="text-dark"> CODE EQUIPEMENT:</strong>
                            {{ $equipement->equip_code }}
                        </p>
                        <p class="text-primary"> <strong class="text-dark"> DESIGNATION:</strong>
                            {{ $equipement->designation }}
                        </p>
                        <p class="text-primary"> <strong class="text-dark"> FAMILLE EQUIPEMENT:</strong>
                            {{ $equipement->familleEquipement->fam_equip_code }}
                        </p>

                        <a class="btn btn-dark" href="{{ route('equipements.index') }}">Retourner</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
