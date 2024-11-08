@extends('layout')

@section('title', $book->title)
@section('content')
    <div>
        <h3>{{ $book->title }}</h3>
        <div>View: {{ $book->author }} </div>
        <div>
            <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}" width="400">
        </div>
        <div>
            {{ $book->publication }}
        </div>
        <div class="">
            {{ $book->price}}
        </div>
        <div>
            {{$book->quantity}}
        </div>
    
    </div>
@endsection
