@extends('layout.app')
@section('content')
    <h1> Edit Post </h1>
    <form method="POST" action="{{ route('posts.update', ['id' => $post->id]) }}">
        @csrf
        @method('PUT')
        <label for="text"> Title </label><br>
        <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{$post->title}}"/>
        <input type="submit" name="submit"/>
    </form>
    <form method="POST" action="{{ route('posts.delete', ['id' => $post->id]) }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="DELETE"/>
    </form>

@endsection
