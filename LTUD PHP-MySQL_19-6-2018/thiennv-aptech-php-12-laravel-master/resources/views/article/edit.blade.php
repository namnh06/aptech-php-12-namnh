@extends('layout.master')

@section ('content')

<h3>Edit Article</h3>
<form action="{{route('update',$article->id)}}" method="post">
    <input type="hidden" name="_method" value="put">
    {{csrf_field()}}
    <div class="form-group">
        <label for="article">Title:</label>
        <input type="text" class="form-control" placeholder="Title" name="title" value="{{$article->title}}">
    </div>
    <div class="form-group">
        <label for="article">Content:</label>
        <textarea name="content" class="form-control" rows="3" placeholder="Content" value="{{$article->content}}"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-info">
            EDIT
        </button>
    </div>
</form>

@endsection