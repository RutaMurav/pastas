@extends('layouts.app')
@section('content')


    <div class="card-body table-responsive-sm">
        <table class="table table-hover table-light">
            <tr>
                <th>Town</th>
                <th>Capacity</th>
                <th>Code</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->town }}</td>
                    <td>{{ $post->capacity }}</td>
                    <td>{!! $post->code !!}</td>
                    <td>
                        <form action={{ route('post.destroy', $post->id) }} method="POST">
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info">Edit</a>
                            @csrf @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete">

                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{ route('post.create') }}" class="btn btn-dark">Add</a>
        </div>
    </div>
@endsection
