@extends('layouts.app')

@section('content')
<section class="comics">
    <div class="container">
        <div class="title-main">CURRENT SERIES</div>
        <div class="row row-cols-6  g-4 py-5">
            @foreach ($comics as $comic)
            <div class="col" >
                <div class="card">
                    <img src={{$comic["thumb"]}} class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic["title"]}}</h5>
                        
                    </div>
                </div>
                    
                
            </div>
            @endforeach
    
        </div>
        <div class="text-center py-3">
            <button class="my-btn" >LOAD MORE</button>
        </div>
    </div>

</section>
  
  
@endsection


