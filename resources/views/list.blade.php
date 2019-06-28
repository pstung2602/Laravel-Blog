@extends('layout')
@section('content')
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Type</th>
        <th scope="col">Author</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">{{$blogs->title}}</th>
        <td>{{$blogs->type}}</td>
        <td>{{$blogs->author}}</td>
        <td><a href="{{route('index')}}">Back</a></td>
    </tr>
</table>
@endsection