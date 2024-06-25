@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista dei post</h1>
            <a class="btn btn-primary" href="{{route('admin.posts.create')}}"> Crea</a>
        <table class="table w-100">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>contenuto</th>
                    <th>slug</th>
                    <th>tipologia</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->content }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>{{ $item->type->name }}</td>
                        <td>
                            <div class="d-flex flex-column gap-2">
                                <a href="{{ route('admin.posts.edit', ['post' => $item->slug]) }}">
                                    <button class="btn btn-primary">Modifica</button>
                                </a>
                                {{-- 
                                <a href="{{ route('posts.edit', ['dc_comic' => $item->id]) }}">
                                    <button class="btn btn-primary">Modifica</button>
                                </a>
                                
                                <form action="{{ route('posts.destroy', ['dc_comic' => $item->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Cancella</button>
                                </form> --}}
                            </div>


                        </td>
                    </tr>
                @endforeach

        </table>
    </div>
@endsection
