<div class="container">
    <nav class="nav-box">
        <div ><img src="{{Vite::asset('resources/img/dc-logo.png')}}" class="img-box" alt=""></div>
        
        <ul>
            @foreach (config("myConfig.navbarLinks") as $link )
            <li >
                {{$link}}
            
            </li>
                
            @endforeach
        </ul>
        <form  role="search">
            <input class="form-control " type="search" placeholder="Search" aria-label="Search">
           
          </form>
        

    </nav>

</div>
@include('partials.jumbotrone')