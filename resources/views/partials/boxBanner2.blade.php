

<div class="box-banner-2">
    <div class="container">
        <div class="d-flex ">
            <div class="banner-2-links">
                <div class="box-link">
                    <div>
                        <span> 
                         DC COMICS
                        </span>
                        <ul>
                            @foreach (config("myConfig.box2links")["dcComicsList"] as $link )
                            <li ><a href="#">{{$link}}</a></li>
                            @endforeach
                           

                        </ul>
                    </div>
                    <div>
                        <span> 
                         SHOP
                        </span>
                        <ul>
                            
                            @foreach (config("myConfig.box2links")["shopList"] as $link )
                            <li ><a href="#">{{$link}}</a></li>
                            @endforeach
                           

                        </ul>
                    </div>

                </div>
                <div class="box-link">
                    <div>
                        <span> 
                         DC
                        </span>
                        <ul>
                            
                            @foreach (config("myConfig.box2links")["dcList"] as $link )
                            <li ><a href="#">{{$link}}</a></li>
                            @endforeach
                

                        </ul>
                    </div>

                </div>
                <div class="box-link">
                    <div>
                        <span> 
                         SITES
                        </span>
                        <ul>
                            @foreach (config("myConfig.box2links")["sitesList"] as $link )
                            <li ><a href="#">{{$link}}</a></li>
                            @endforeach
                           

                        </ul>
                    </div>
                   
                </div>


            </div>
            <div class="banner-2-img-box">
                <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}"   alt="">

            </div>
        </div>

    </div>
    
</div>