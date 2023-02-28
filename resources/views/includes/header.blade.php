@php
    $links =config('header');
@endphp

<header class="container">
    <figure>
        <img src="{{ asset('images/dc-logo.png')}}" alt="">
    </figure>

    <nav>
        <ul class="d-flex">
        @foreach ( $links as $link)
            <li>
                <a href="{{ route($link['route_name']) }}">{{$link['text']}}</a>
            </li>
        @endforeach
            
        </ul>
    </nav>

   
   
</header>

 <section class="jumbo-img">    
</section>

</html>