<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-4 shadow p-2 display-3">Ecco il tuo articolo </h1>
                
            </div>
            <div class="col-6">
                <h1 class="display-2 text-center">{{$design->title}}</h1>
                <h3>{{$design->category}}</h3>
                <p>{{$design->descritpion}}</p>
                <p>{{$design->price}}</p>
            </div>
            <div class="col-6">
                <img src="{{Storage::url($design->img)}}" height="300px" alt="">
            </div>
        </div>
    </div>
</x-layout>