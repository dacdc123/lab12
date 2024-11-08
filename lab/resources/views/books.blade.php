@extends('layout')

@section('title', 'Trang chủ ')
@section('content')
    <div>
        @foreach ($books as $book)
            <div>
                <a href="{{ route('detail', $book->id)   }}">
                    <h3>{{ $book->title }}</h3>
                </a>
                <p>{{ $book->author }}</p>
                <p>{{ $book->publisher }}</p>
                <p>{{ $book->price }}</p>
                <hr>
            </div>
        @endforeach

        {{ $books->links()}}
    </div>
@endsection
