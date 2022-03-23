<section class="container">
@include('layouts.flash')

    <h1 class="text-center m-5">Section Genre</h1>
    
    <a class="btn btn-success m-3 text-white" href="/gender/create">Ajouter un Genre</a>
    <table class="table table-striped table-warning">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Genre</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($genders as $gender)
                <tr>
                    <th scope="row">{{ $gender->id }} </th>
                    <td>{{ $gender->genre }} </td>
                    <td class="d-flex">
                        <form action="/gender/{{ $gender->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-light text-danger mx-2">Supprimer</button>
                        </form>
                        <a class="btn btn-light text-info" href="/gender/{{ $gender->id }}/edit ">Modifier</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>