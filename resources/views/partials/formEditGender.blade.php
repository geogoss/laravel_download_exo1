<section id="about" class="w-50 mx-auto my-5">
    @include('layouts.flash')
    <div class="bg-primary py-5">
        <h3 class="text-center text-white">Modifier un Genre</h3>
       
        <form class="w-75 mx-auto" action="/gender/{{ $gender->id }} " method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Genre</label>
                <input name="genre" type="text" value="{{ $gender->genre }}" class="form-control"
                    id="addSmallerInputName" aria-describedby="addSmallerInputNameHelp">
            </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
    </div>
</section>
<section>
    
</section>