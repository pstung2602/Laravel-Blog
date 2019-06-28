@extends('layout')
@section('content')
<table class="table" border="2">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Title</th>
        <th scope="col">Type</th>
        <th scope="col">Author</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($blogs as $key => $blog)
    <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$blog->title}}</td>
        <td>{{$blog->type}}</td>
        <td>{{$blog->author}}</td>
        <td><a href="{{route('view',['id'=>$blog->id])}}"><button type="button" class="btn btn-primary">Xem</button></a>
            <a href="{{route('edit',['id'=>$blog->id])}}"><button type="button" class="btn btn-primary">Sua</button></a>
            <a href="{{route('delete',['id'=>$blog->id])}}"><button type="button" class="btn btn-primary">Xoa</button></a></td>
    </tr>
    @endforeach
    </tbody>
</table>
<a href="{{route('create')}}"><button type="button" class="btn btn-primary">Them</button></a>
@endsection
