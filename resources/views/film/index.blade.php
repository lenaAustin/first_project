@extends('layouts.main')

@section('content')
    <div>
        <div><a href="{{ route('film.create') }}" class="btn btn-outline-dark mt-3 mb-3">Add film</a></div>
        @foreach($films as $film)
            <div><a href="{{ route('film.show', $film->id) }}"> {{ $film->id }}. {{ $film->title }} </a></div>
        @endforeach
    </div>
@endsection

