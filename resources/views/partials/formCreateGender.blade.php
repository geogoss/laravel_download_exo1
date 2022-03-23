<section id="about" class="w-50 mx-auto my-5">
    @include('layouts.flash')
    <div class="bg-primary py-5">
        <h1 class="text-center text-white">Créer un Genre</h1>

        <form class="w-75 mx-auto" action="/gender " method="POST">
            @csrf
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Genre</label>
                <input name="genre" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>

            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</section>