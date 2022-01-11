@extends('layouts.app')

@section('content')
<div class="banner">
   <img src="https://www.clipartmax.com/png/full/310-3105859_film-cinema-icon-png.png" alt="">
   <h1>Welcome Home</h1>
   <img src="https://www.clipartmax.com/png/full/310-3105859_film-cinema-icon-png.png" alt="">
</div>
<div class="container">
    <div class="row">
           @foreach ($movies as $movie)
           <div class="card">
               <h3>{{$movie->title}}</h3>
               <p>Titolo originale: <span>{{$movie->original_title}}</span></p>
               <p>Nazionalità: <span>{{$movie->nationality}}</span></p>
               <p>Data di uscita: <span>{{$movie->date}}</span></p>
               <p>Voto: <span>{{$movie->vote}}</span></p>
               
           </div>
           @endforeach
       </div>
</div>

@endsection