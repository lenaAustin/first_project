@extends('layouts.main')

@section('content')

    <div>
            <div>{{ $film->id }}. {{ $film->title }}</div>
            <div>{{ $film->year }}</div>
            <div>{{ $film->genre }}</div>
    </div>
    <div>
        <a href="{{ route('film.edit', $film->id) }}" class="btn btn-dark mb-3 mt-3">Edit</a>
    </div>
    <div>
        <a href="{{ route('film.index') }}" class="btn btn-dark mb-3 mt-3">Back</a>
    </div>
    <div>
        <form action="{{ route('film.destroy', $film->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-outline-danger mt-3">
        </form>
    </div>
@endsection

