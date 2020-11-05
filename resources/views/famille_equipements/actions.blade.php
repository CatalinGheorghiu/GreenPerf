<a class="btn btn-link text-dark " href="{{ route('famille_equipements.show', $id) }}"><i class="fas fa-eye"></i></a>
@can('delete-users')
    <a class="btn btn-link p-0 m-0" href="{{ route('famille_equipements.edit', $id) }}"><i class="fas fa-edit"></i></i></a>

    <form action="{{ route('famille_equipements.destroy', $id) }}" method="POST" class="d-inline ">
        @method('DELETE')
        @csrf
        <button class="btn btn-link text-danger" type="submit"><i class="fas fa-trash-alt"></i></i></button>
    </form>
@endcan
