@extends('layouts.app')

@section('content')
            <div class="container mt-5">
                <div class="row align-items-center">
                    <div class="col-sm-12 nowrap">
                        <div class="card">
                            <div class="card-header text-center">
                                <h2>Gestion des utilisateurs</h2>
                            </div>
                            <div class="card-body">
                                @can('edit-users')
                                    <a href="{{ route('admin.users.create') }}">
                                        <button class="btn btn-success float-right m-2" type="button">Ajouter un
                                            utilisateur</button>
                                    </a>
                                @endcan
                                <table class="table table-responsive-sm table-responsive-md table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Mail</th>
                                            <th scope="col">Project</th>
                                            <th scope="col">Role</th>
                                            <th scope="col" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <th scope="row">{{ $user->id }}</th>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->project->nom }}</td>
                                                <td>{{ implode(
                                                        ',',
                                                        $user->roles()->get()->pluck('name')->toArray(),
                                                    ) }}</td>
                                                <td class="text-right">
                                                    @can('edit-users')
                                                        <a href="{{ route('admin.users.edit', $user->id) }} " class="">
                                                            <button class="btn btn-primary " type="button"><i
                                                                    class="fa fa-pencil-square-o"></i>
                                                                Modifier</button>

                                                        </a>
                                                    @endcan
                                                    @can('delete-users')
                                                        <button class="btn btn-danger " data-toggle="modal"
                                                            data-target="#delete" data-id="{{ $user->id }}"><i
                                                                class="fas fa-trash"></i>
                                                            Supprimer
                                                        </button>
                                                    @endcan

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>


        </section>
    </main>

    <!-- Modal -->
    <div class="modal fade " id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5>Supprimer l'utilisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.users.destroy', 'delete') }}" method="POST" class=" mx-2">

                    @csrf
                    @method('DELETE')
                    <div class="modal-body ">
                        <input type="hidden" name="user_id" id="user_id" value="">
                        <p class="lead">Êtes-vous sûr de vouloir supprimer l'utilisateur?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
