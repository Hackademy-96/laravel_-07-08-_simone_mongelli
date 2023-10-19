<nav class="navbar navbar-expand-lg  bg-dark custom-nav fixed-top "  data-bs-theme="dark" >
    <a class="navbar-brand" href="#">Architecture| <span class="text-success">.it</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto ">
        <li class="nav-item   mx-2">
          <a class="nav-link text-white" href="{{route('welcome')}}">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3 text-white" href="{{route('article_create')}}">Carica Articolo </a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-3 text-white" href="{{route('article_index')}}">Prodotti</a>
        </li>
        @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu ">
                <li class=" dropdown-item nav-item  d-flex justify-content-center">
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
        
                        <button type="submit" class="nav-link active ">Logout</button>
                    </form>
                    
                </li>
            </ul>
        </li>
        @endauth

       
                
        
        
      </ul>
      <ul class="d-flex   ">
       @guest
          <li class="  mx-4   ">
            <form  action="{{route('register')}}">
                @csrf
                <button type="submit" class="btn btn-outline-success ">Registrati</button>
            
            </form>
          
        </li>
        <li class="nav-item">
            <form  action="{{route('login')}}">
                <button type="submit" class="btn btn-outline-success ">Login</button>
            </form>
        </li>
        @endguest
      </ul>
    </div>
  </nav>

  