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
            </div>
            <div class="col-6">
                <img src="{{Storage::url($product->img)}}" height="300px" alt="">
            </div>
        </div>
    </div>
</x-layout>