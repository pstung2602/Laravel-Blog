@extends('layout')
@section('content')
    <form method="post">
        @csrf
        <div class="form-group">
            <label >Title</label>
            <input type="text" class="form-control" value="{{$blogs->title}}" name="title"  >
        </div>
        <div class="form-group">
            <label >Type</label>
            <input type="text" class="form-control" value="{{$blogs->type}}" name="type" >
        </div>
        <div class="form-group">
            <label >Type</label>
            <input type="text" class="form-control" value="{{$blogs->author}}" name="author" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
       <a href="{{route('index')}}">Back</a>
    </form>
@endsection