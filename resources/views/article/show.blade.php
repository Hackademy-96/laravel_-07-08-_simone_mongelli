<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-4 shadow p-2 display-3">Ecco il tuo articolo </h1>
                
            </div>
            <div class="col-6">
                <h1 class="display-2 text-center ">{{$product->title}}</h1>
                <h3>{{$product->category}}</h3>
                <p>{{$product->descritpion}}</p>
                <p>{{$product->price}}</p>
                {{-- <p>{{$product->user->name}}</p> --}}
                
                {{-- @if($product->user->id == Auth::user()->id) --}}
                <a href="{{route('article_edit', compact('product'))}}" class="btn btn-outline-dark">Modifica articolo </a>
                <form method="POST" action="{{route('article_destroy', compact('product'))}}">
                    @method('delete')
                    @csrf

                    <button type="submit" class="btn btn-outline-danger">Elimina articolo </button>

                </form>
                {{-- @endif --}}
               
            </div>
            <div class="col-6">
                <img src="{{Storage::url($product->img)}}" height="300px" alt="">
            </div>
        </div>
    </div>
</x-layout>