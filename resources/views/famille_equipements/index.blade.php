@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <h1 class="text-center"><u> Famille Equipements </u></h1>

    <div class="container min-vh-100">
        <div class="row  justify-content-center align-items-center">
            <div class="col-md-12 mb-5 ">
                <table class="table   text-center table-striped  table-bordered" id="myTable">
                    @can('edit-users')
                        <a href="{{ route('famille_equipements.create') }}">
                            <button class="btn btn-block btn-primary  mr-3 mb-2 px-3">Ajouter famille equipements</button>
                        </a>
                    @endcan
                    <thead>
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>


@section('scripts')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    {{-- {{ $dataTable->scripts() }} --}}

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('famille_equipements.index') }}",
                columns: [{
                        data: 'fam_equip_code'
                    },
                    {
                        data: 'nom'
                    },
                    {
                        data: 'btns',
                        orderable: false
                    },

                ]
            });
        });

    </script>
@endsection
@endsection
