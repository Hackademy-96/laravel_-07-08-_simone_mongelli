<x-layout>
    <div class="container mt-5 p-2 ">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="text-center display-3 shadow mt-4">Modifica Articolo</h2>
            </div>
            <div class="col-6">
                <form method="POST" action="{{route('article_update', compact('product'))}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">  Titolo</label>
                      <input name="title" type="text" class="form-control" id="title"  value="{{$product->title}}">
                      
                    </div>
                    <div class="mb-3">
                      <label for="category" class="form-label">Categoria</label>
                      <input name="category" type="text" class="form-control" id="category" value="{{$product->category}}" >
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Descrizione</label>
                        <textarea class="shadow form-control" name="description" id="description" cols="30" rows="10" placeholder="Descritpion">{{$product->descritpion}}</textarea>
                      </div>
                      <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input name="price" type="text" class="form-control" id="price" value="{{$product->price}}">
                      </div>
                      <div>
                        <p>Immagine attuale </p>
                        <img src="{{Storage::url($product->img)}}" alt="" width="200">
                      </div>
                      <div class="mb-3">
                        <label for="img" class="form-label">Carica la copertina </label>
                        <input name="img" type="file" class="form-control" id="img">
                      </div>

                      
                  <div class="mb-3">
                    @foreach ($consoles as $console)
                  <div class="form-check">
                    <input class="form-check-input" @if($product->consoles->contains($console)) checked @endif 
                    name="consoles[]" type="checkbox" value="{{$console->id}}" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      {{$console->name}}
                    </label>
                  </div>
                  @endforeach
                  </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>