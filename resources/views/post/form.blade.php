@extends('post.parent')

@section('title','Update item')

@section('content')
    <div class="container">
        <div class="col-md-8 mt-5 mx-auto">
            <form action="{{ route('post.update',[$post]) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $post->title }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="numeric" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ $post->number }}">
                    @error('number')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <textarea name="text" class="form-control @error('text') is-invalid @enderror" id="content" cols="30" rows="10">
                        {{ $post->content }}
                    </textarea>
                    @error('text')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
@endsection