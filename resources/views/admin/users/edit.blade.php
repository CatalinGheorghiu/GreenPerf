@extends('layouts.app')

@section('content')
    <div class="container h-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-7 mt-5">
                <div class="card">
                    <div class="card-header text-center ">
                        <h2>Modifier l'utilisateur <strong>{{ $user->name }}</strong></h2>
                    </div>

                    <div class="card-body align-content-center">
                        <form action="{{ route('admin.users.update', $user) }}" method="POST">
                            @csrf
                            <div class="form-group row justify-content-center">
                                <label for="email" class="col-md-2 col-form-label ">Email</label>

                                <div class="col-md-10">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label ">Nom</label>

                                <div class="col-md-10">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ $user->name }}" required autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="roles" class="col-md-2 col-form-label ">Roles</label>

                                {{ method_field('PUT') }}
                                <div class="col-md-10">
                                    @foreach ($roles as $role)
                                        <div class="form-check">
                                            <input type="checkbox" name="roles[]" value='{{ $role->id }}' @if ($user->roles->pluck('id')->contains($role->id))
                                            checked
                                    @endif>
                                    <label>{{ $role->name }}</label>
                                </div>
                                @endforeach
                            </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label for="project" class="col-md-2 col-form-label ">Project</label>

                        <div class="col-md-10">

                            <select id="project" class="form-control @error('project') is-invalid @enderror" name="project">
                                @foreach ($projects as $project)
                                    <option
                                        value="{{ $project->id }}" {{ $project->id == $user->project_id ? 'selected' : '' }}>
                                        {{ $project->nom }}
                                    </option>
                                @endforeach
                            </select>

                            @error('project')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
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
