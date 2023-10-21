<x-layout>
    <div class="container mt-5 p-3 shadow">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center"> Ciao {{Auth::user()->name}}</h1>
            </div>
            @foreach(Auth::user()->designs as $product )

            <div class="col-3 shadow my-3 mx-3 p-3" >
                
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="{{Storage::url($product->img)}}" class="card-img-top custom-img" height="200px"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$product->title}}</h5>
                        <p class="card-text">{{$product->descritpion}}</p>
                        <p class="card-text">{{$product->price}} €</p>
                        <a href="{{route('article_show', compact('product'))}}" class="btn btn-primary">Visualizza</a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>