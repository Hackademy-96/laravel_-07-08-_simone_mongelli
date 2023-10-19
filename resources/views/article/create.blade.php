<x-layout>

<div class="container mt-5 p-5 shadow rounded">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="text-center">Carica il tuo articolo </h1>
        </div>
        <div class="col-6">
            <form method="POST" action="{{route('article_store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo</label>
                  <input name="title" type="text" class="form-control" id="title" >
                  
                </div>
                <div class="mb-3">
                  <label for="category" class="form-label">Categoria</label>
                  <input name="category" type="text" class="form-control" id="category">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Descrizione</label>
                    <textarea class="shadow form-control" name="description" id="description" cols="30" rows="10" placeholder="Descritpion"></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input name="price" type="text" class="form-control" id="price">
                  </div>
                  <div class="mb-3">
                    <label for="img" class="form-label">Carica la copertina </label>
                    <input name="img" type="file" class="form-control" id="img">
                  </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>

</x-layout>