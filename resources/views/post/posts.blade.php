@extends('post.parent')

@section('title','posts')

@section('content')
    <div class="container">
        <table class="table table-hover">
            <tr><th>Id</th><th>Post title</th><th>Post text</th><th>Actions</th></tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->content,150)  }}</td>
                    <td>
                        <a href="{{ route('post.show',[$post])}}">Show more<i class="fas fa-eye"></i></a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $posts->links() }}
    </div>
@endsection