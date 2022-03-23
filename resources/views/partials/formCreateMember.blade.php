<section id="about" class="w-50 mx-auto my-5">
    @include('layouts.flash')
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Créer un Membre</h1>

        <form class="w-75 mx-auto" action="/member " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">SRC</label>
                <input name="src" type="file" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Nom</label>
                <input name="name" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Age</label>
                <input name="age" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputLatin" class="form-label">Genre</label>
                <select name="genre" type="text" class="form-select" id="addTreeInputLatin"
                    aria-describedby="addTreeInputLatinHelp">
                    @foreach ($genders as $gender)
                        <option value="{{ $gender->genre }} ">{{ $gender->genre }} </option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</section>
