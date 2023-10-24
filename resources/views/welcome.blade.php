<x-layout>
    <div class="container-fluid header mt-5 py-5 ">
       
        <div class="w-100 h-100 backdrop ">
            <h1 class="display-2 text-center headerh1 ">ARCHITECTURE</h1>
            @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
       </div> 

    </div>

    <div class="container">
        <div class="row justify-content-evenly">
            @foreach ($consoles as $console)
         
            <div class="col-2 shadow my-5 mx-2 p-3" >
                         
             <div class="card">
                 <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                     <img src="" class="card-img-top custom-img" height="200px"/>
                     <a href="#!">
                         <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                     </a>
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">{{$console->name}}</h5>
                    
                 
                     <a href="{{route('console_filter', compact('console'))}}" class="btn btn-primary">Visualizza</a>
                 </div>
             </div>
         </div>
                
            @endforeach

        </div>
    </div>





</x-layout>
