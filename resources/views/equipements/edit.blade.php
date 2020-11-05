@extends('layouts.app')


@section('content')
    <div class="container min-vh-100 mt-5 align-middle ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3> Modifier l'equipement <strong class="text-primary">{{ $equipement->equip_code }}</strong>
                        </h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('equipements.update', $equipement->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group row">
                                <label for="equip_code" class="col-md-2 col-form-label text-md-left">Equipement
                                    Code</label>

                                <div class="col-md-6">
                                    <input id="equip_code" type="text"
                                        class="form-control @error('equip_code') is-invalid @enderror" name="equip_code"
                                        value="{{ $equipement->equip_code }}" required autocomplete="equip_code" autofocus>

                                    @error('equip_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="designation" class="col-md-2 col-form-label text-md-left">Designation</label>

                                <div class="col-md-6">
                                    <input id="designation" type="text"
                                        class="form-control @error('designation') is-invalid @enderror" name="designation"
                                        value="{{ $equipement->designation }}" required autofocus>

                                    @error('designation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-5">
                                <label for="famille_equip">Famille Equipement</label>
                                <select class="form-control" id="famille_equip">
                                    <option value="{{ $equipement->familleEquipement->fam_equip_code }}">
                                        {{ $equipement->familleEquipement->fam_equip_code }}
                                    </option>
                                    @foreach ($familleEquipements as $equip)
                                        <option value="{{ $equip->fam_equip_code }}">{{ $equip->fam_equip_code }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="btn btn-primary">Mettre à jour</button>
                            <a class="btn btn-dark" href="{{ url()->previous() }}">Annuler</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
