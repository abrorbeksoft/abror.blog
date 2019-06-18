@extends('post.posts')

@section('title','Form')

@section('content')
    <div class="container">
        <form action="{{ route('post,store') }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
            <div class="form-group">
            <textarea name="content" class="form-control" id="content" cols="30" rows="10">
            </textarea>
            </div>
        </form>
    </div>
@endsection