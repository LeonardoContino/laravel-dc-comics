

@extends('layout.main')

@section('main-content')
<div class="content">
    <div class="btn-series">Current series</div>
    <div  class="cards-comics">
        @foreach ($comics as $comic)
             <div class="card">
                <img src={{$comic["thumb"]}} alt="">
                <figcaption class="img-text">{{ $comic['series'] }}</figcaption>
            </div>  
        @endforeach
    </div>
    <div class="btn-more">
        load more
    </div>
    
    
</div>

<section class="icon">
    <div>
        <div class="image-icon">
            
        </div>
        <div class="text-icon"></div>
    </div>
</section>
@endsection
