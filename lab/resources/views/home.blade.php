@extends('layout')

@section('title', 'Trang chủ ')
@section('content')
    <div>
        <h1>Danh sách giá cao nhất </h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Price</th>
                    <th scope="col">quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>
                            <a href="{{ route('detail', $book->id)}}">
                              <h4>  {{ $book->title }}</h4>
                            </a>
                        </td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div>
        <h1>Danh sách giá Thấp nhất </h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Price</th>
                    <th scope="col">quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($booked as $book)
                    <tr>
                        <td>
                            <a href="{{ route('detail', $book->id)}}">
                              <h4>  {{ $book->title }}</h4>
                            </a>
                        </td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->quantity }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
