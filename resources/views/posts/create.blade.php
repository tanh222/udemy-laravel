@extends('layout.app')
@section('content')
    <h1> Creat Post </h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="number" class="form-control" placeholder="Enter user_id" name="userid"><br>
        <label for="text"> Title </label><br>
        <input type="text" class="form-control" placeholder="Enter title" name="title"><br>
        <label for="text"> Content </label><br>
        <input type="text" class="form-control" placeholder="Enter content" name="content">
        <input type="submit"/>
    </form>

    @yield('footer')

@endsection
