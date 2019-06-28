@extends('layout')
@section('content')
    <form method="post">
        @csrf
        <div class="row">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="text" class="form-control" name="type" required>
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" class="form-control" name="author" required>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
            <a href="{{route('index')}}">Back</a>
        </div>
    </form>
@endsection