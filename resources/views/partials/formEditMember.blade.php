<section id="about" class="w-50 mx-auto my-5">
    @include('layouts.flash')
    <div class="bg-primary py-5">
        <h3 class="text-center text-white">Modifier un Membre</h3>

        <form class="w-75 mx-auto" action="/member/{{ $member->id }} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <img style="width: 150px;" src="{{ asset('storage/' . $member->src) }} " alt="">
                <input name="src" type="file" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Nom</label>
                <input name="name" type="text" value="{{ $member->name }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Age</label>
                <input name="age" type="text" value="{{ $member->age }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Genre</label>
                <input name="genre" type="text" value="{{ $member->genre }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</section>
