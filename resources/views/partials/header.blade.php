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
        

    </nav>
</div>