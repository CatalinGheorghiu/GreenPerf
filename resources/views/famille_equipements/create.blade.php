@extends('layouts.app')


@section('content')
    <main class="d-flex min-vh-100">
        @include('partials.left_menu')

        <section class="content w-100 d-flex flex-column align-items-center  mt-5">
            <div class="main-section-head text-center mb-5">
                <h1 class=""><u>Ajouter une famille de equipement </u></h1>
            </div>

            <div class="container align-middle ">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('famille_equipements.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="fam_equip_code" class="col-md-2 col-form-label text-md-left">
                                            Code Famille Equipement</label>

                                        <div class="col-md-6">
                                            <input id="fam_equip_code" type="text"
                                                class="form-control @error('fam_equip_code') is-invalid @enderror"
                                                name="fam_equip_code" value="{{ old('fam_equip_code') }}" required
                                                autocomplete="fam_equip_code" autofocus>

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
                                                value="{{ old('nom') }}" required autofocus>

                                            @error('nom')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                    <a class="btn btn-dark" href="{{ url()->previous() }}">Annuler</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
