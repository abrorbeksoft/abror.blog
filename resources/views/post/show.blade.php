@extends('post.parent')

@section('title','Topic item')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <div class="card-title">{{ $post->title }}</div>
        </div>
        <div class="card-body">
            <div class="card-text">
                {{ $post->content }}
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col">
                    <form action="{{ route('post.destroy',[$post]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete<i class="fas fa-trash-alt ml-3"></i></button>
                    </form>
                </div>
                <div class="col">
                    <a href="{{ route('post.edit',[$post]) }}" class="btn btn-primary">Update<i class="fas fa-pen-square ml-3"></i></a>
                    <a href="{{ route('post.index') }}" class="btn btn-info">Main page <i class="fas fa-home ml-3"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection