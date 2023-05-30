@extends('layouts.auth')

@section('content')

<div class="container">
    <h1>Technology: {{$technology->name}}</h1>
    <hr>
    <h2>Slug: {{$technology->slug}}</h2>
    <h3>Description:</h3>
    <p>{{$technology->description ? $technology->description : 'no description available'}}</p>
    <h3>Projects:</h3>
    @if ($technology->projects)
    <ul>
        @foreach ($technology->projects as $project)
        <li>{{$project->title}}</li>
        @endforeach
           
    </ul>

    @else
        <h4>no projects related to this technology</h4>
    @endif
</div>
    
@endsection