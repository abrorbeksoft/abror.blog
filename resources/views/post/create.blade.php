@extends('post.parent')

@section('title','Form')

@section('content')
    <div class="container">
        <form action="{{ route('post.store') }}" method="post" class="mt-5 col-md-10 mx-auto">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" value="{{ old('title') }}" placeholder="title">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
            <textarea name="text" class="form-control @error('text') is-invalid @enderror"  cols="30" rows="10" placeholder="Text content">
            {{ old('text') }}
            </textarea>
            @error('text')
            <div class="invalid-feedback">{{ $message }}</div>
            </div> 
            @enderror
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection