@extends('layouts.app')


@section('content')
    <main class="d-flex min-vh-100">
        @include('partials.left_menu')

        <section class="content w-100 d-flex flex-column align-items-center  mt-5">
            <div class="main-section-head text-center mb-5">
                <h1><u> Modifier Famille Equipement <strong>#{{ $familleEquipement->id }}</strong> </u></h1>
            </div>

            <div class="container align-middle ">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Modifier famille d'equipement <strong
                                    class="text-primary">{{ $familleEquipement->fam_equip_code }}</strong></div>

                            <div class="card-body">
                                <form action="{{ route('famille_equipements.update', $familleEquipement->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group row">
                                        <label for="fam_equip_code" class="col-md-2 col-form-label text-md-left">
                                            Code Famille Equipement</label>

                                        <div class="col-md-6">
                                            <input id="fam_equip_code" type="text"
                                                class="form-control @error('fam_equip_code') is-invalid @enderror"
                                                name="fam_equip_code" value="{{ $familleEquipement->fam_equip_code }}"
                                                required autocomplete="fam_equip_code" autofocus>

                                            @error('fam_equip_code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-5">
                                        <label for="nom" class="col-md-2 col-form-label text-md-left">Nom</label>

                                        <div class="col-md-6">
                                            <input id="nom" type="text"
                                                class="form-control @error('nom') is-invalid @enderror" name="nom"
                                                value="{{ $familleEquipement->nom }}" required autofocus>

                                            @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <button class="btn btn-primary">Mettre à jour</button>
                                    <a class="btn btn-dark" href="{{ route('famille_equipements.index') }}">Annuler</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
