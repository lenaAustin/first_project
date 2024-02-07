@extends('layouts.main')

@section('content')
    <div>
        <form action="{{ route('film.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" name="year" class="form-control" id="title" placeholder="Year">
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" name="genre" class="form-control" id="genre" placeholder="genre">
            </div>
            <button type="submit" class="btn btn-outline-dark">Create</button>
        </form>
    </div>
@endsection

