@extends('layout.main')

@section('main-content')
<div class="bg-blu"></div>
<div id="show" class="container bg-white">
    
    <div class="row mt">
        <img class="image-position img-fluid" src="{{$comic['thumb']}}" alt="">
        <h2>{{$comic->title}}</h2>
        <div class="text-center mt-3">
            <h5>{{$comic->description}}</h5>
        </div>
        <hr>
        <h3 class="mt">Infos</h3>
        <div class="d-flex">
            <div class="w-40 mx">
                <div class="mt text-center">
                    <div>
                        <h4>Artists:</h4>
                        <i>{{$comic->artists}}</i>
                    </div>
                    <div class="mt">
                        <h4>Writers:</h4>
                        <i>{{$comic->writers}}</i>
                    </div>
                </div>
            </div>
            <div class="w-40 mx">
                <div class="mt text-center ">
                    <div>
                        <h4>Type:</h4>
                        <i>{{$comic->type}}</i>
                    </div>
                    <div class="mt">
                        <h4>Price:</h4>
                        <i>${{$comic->price}}</i>
                    </div>
                    <div class="mt">
                        <h4>Sale Date:</h4>
                        <i>${{$comic->sale_date}}</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection