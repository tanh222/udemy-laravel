@extends('layout.app')
@section('content')

    <h1><a href="{{route('posts.form-edit',$post->id)}}">{{$post->title}}</a></h1>

@endsection


