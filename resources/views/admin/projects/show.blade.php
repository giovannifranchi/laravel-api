@extends('layouts.auth')

@section('content')
    <div class="container py-4">
        <h1 class="mb-3">Project {{$project->title}} details</h1>
        <h3 class="mb-3">Title: {{$project->title}}</h3>
        <h3 class="mb-3">Slug: {{$project->slug}}</h3>
        <h3 class="mb-3">Type: {{$project->type?->name ? $project->type->name : 'unknown'}}</h3>
        <h3 class="mb-3">Technologies:
            @if (count($project->technologies) > 0)
            @foreach ($project->technologies as $technology)
            {{$technology->name}}
                
            @endforeach
            @else
            unknown
            @endif 
        </h3>
        <h3 class="mb-3">Summary:</h3>
        <p>{{$project->summary}}</p>
        <h3 class="mb-3">Status: </h3>
        <h3 class="mb-3">Start date: </h3>
        <h3 class="mb-3">Extimated deadline: </h3>
        @if (isset($project->image))
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{$project->title}}">
        @endif

        <h3 class="mb-3">Comments:</h3>
        @if (count($project->comments)>0)
        <ul class="list-unstyled">
            @foreach ($project->comments as $comment)
                <li>
                    <h4>Author: {{$comment->author}}</h4>
                    <p>{{$comment->content}}</p>
                    <form action="{{route('admin.comments.destroy', $comment)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
        @else
            <p>No Comments for this Project</p>
        @endif

    </div>
@endsection

{{-- Some sections are incompleted to keep flexibility with future migrations --}}