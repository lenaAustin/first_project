@extends('layouts.main')

@section('content')
    <div>
        <form action="{{ route('film.update', $film->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$film->title}}">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" name="year" class="form-control" id="title" placeholder="Year" value="{{$film->year}}">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" name="genre" class="form-control" id="genre" placeholder="genre" value="{{$film->genre}}">
            </div>
            <button type="submit" class="btn btn-outline-dark">Update</button>
        </form>
        <div>
            <a href="{{ route('film.show', $film->id) }}" class="btn btn-dark mb-3 mt-3">Back</a>
        </div>
    </div>
@endsection

