<section class="container">
    @include('layouts.flash')

    <h1 class="text-center m-5">Section Membre</h1>

    <a class="btn btn-success m-3 text-white" href="/member/create">Ajouter un Membre</a>
    <table class="table table-striped table-warning">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">src</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Genre</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                @if ($member->genre == 'Homme')
                    <tr class="table-bordered border-danger">
                @elseif($member->genre == 'Femme')
                    <tr class="table-bordered border-info">
                @else
                        <tr class="table-borderless">
                @endif
                <th scope="row">{{ $member->id }} </th>
                <td>
                    <img style="width: 150px;" src="{{asset('/storage/'.$member->src)}} " alt="">
                    <img style="width: 150px;" src="{{ asset('/images/personnes/'.$member->src) }} " alt="">
                </td>
                <td>{{ $member->src }} </td>
                <td>{{ $member->name }} </td>
                <td>{{ $member->age }} </td>
                <td>{{ $member->genre }} </td>
                <td >
                    <a class="btn btn-light text-info" href="/member/{{ $member->id }}/edit ">Modifier</a>
                    <form action="/member/{{ $member->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-light text-danger my-3">Supprimer</button>
                    </form>
                    <a class="btn btn-light text-success" href="/download/{{ $member->id }} ">Download</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
