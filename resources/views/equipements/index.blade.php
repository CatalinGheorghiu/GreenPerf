@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <h1 class="text-center mt-5"><u> Equipements </u></h1>

    <div class="container min-vh-100 mt-5">
        <div class="row">
            <div class="col-md-12 mb-5 ">
                <table
                    class="table responsive text-center table-striped  table-bordered table-responsive-sm table-responsive-md table-responsive-lg table-condensed"
                    cellspacing="0" width="100%" id="myTable">
                    @can('edit-users')
                        <a href="{{ route('equipements.create') }}">
                            <button class="btn btn-block btn-primary  mr-3 mb-2 px-3">Ajouter un equipement</button>
                        </a>
                    @endcan
                    <thead>
                        <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Famille equipement</th>
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
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: "{{ route('equipements.index') }}",
                columns: [{
                        data: 'equip_code'
                    },
                    {
                        data: 'designation'
                    },
                    {
                        data: 'fam_equip_code',
                        name: 'famille_equipements.fam_equip_code',
                    },
                    {
                        data: 'btns',
                        orderable: false
                    },

                ],
            });

        });

    </script>
@endsection
@endsection
