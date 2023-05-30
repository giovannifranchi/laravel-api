@extends('layouts.auth')

@section('content')

<div class="container p-4">
    <table class="table">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)

            <tr>
                <td>{{$technology->id}}</td>
                <td>{{$technology->name}}</td>
                <td>{{$technology->slug}}</td>
                <td>
                    <div class="d-flex gap-3">
                        <a href="{{route('admin.technologies.show', $technology)}}" class="btn btn-info">Details</a>
                    </div>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection