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
</x-layout>
