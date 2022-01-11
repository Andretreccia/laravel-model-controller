@extends('layouts.app')

@section('content')

<div class="container">
   @foreach ($movies as $movie)
       <div class="row">
           <div class="card">
               <h4>Title: {{$movie->title}}</h4>
               <p>Original Title: {{$movie->original_title}}</p>
               <p>Nationality: {{$movie->nationality}}</p>
               <p>Relase Date: {{$movie->date}}</p>
               <p>Rating: {{$movie->vote}}</p>
           </div>
       </div>
   @endforeach
</div>

@endsection