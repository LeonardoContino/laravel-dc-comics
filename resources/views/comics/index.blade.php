

@extends('layout.main')

@section('main-content')
<div class="content">
    <div class="btn-series">Current series</div>
    <div  class="cards-comics">
        @foreach ($comics as $comic)
        <a href="{{ route('comics.show', $comic->id)}}">
            <div class="card img-fluid">
                <img src={{$comic->thumb}} alt="">
                <figcaption class="img-text">{{ $comic->series }}</figcaption>
            </div> 
        </a>
              
        @endforeach
    </div>

    <div class="d-flex gap-3">
        <div>
            <a class="btn btn-primary" href="{{route('comics.create', $comic)}}">Crea comic</a>
        </div>
        <div class="btn btn-primary">
            load more
        </div>
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
