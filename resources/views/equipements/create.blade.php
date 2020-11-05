@extends('layouts.app')


@section('content')

    <div class="container min-vh-100 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center"><u><strong> Ajouter un equipement </strong></u></h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('equipements.store') }}" method="POST">
                            @csrf
                            {{-- @method('PATCH') --}}
                            <div class="form-group row">
                                <label for="equip_code" class="col-md-2 col-form-label text-md-left">
                                    Code Equipement</label>

                                <div class="col-md-6">
                                    <input id="equip_code" type="text"
                                        class="form-control @error('equip_code') is-invalid @enderror" name="equip_code"
                                        value="" required autocomplete="equip_code" autofocus>

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
                                        value="" required autofocus>

                                    @error('designation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-5">
                                <label for="famille_equipement_id">Famille Equipement</label>
                                <select class="form-control" id="famille_equipement_id" name="famille_equipement_id">
                                    @foreach ($familleEquipements as $familleEquipement)
                                        <option value="{{ $familleEquipement->id }}">
                                            {{ $familleEquipement->fam_equip_code }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Ajouter</button>
                            <a class="btn btn-dark" href="{{ url()->previous() }}">Annuler</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
