@extends('layout.master')

@section ('content')

<h3>Add New Article</h3>
<form action="{{route('store')}}" method="post">
    <input type="hidden" name="_method" value="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="article">Title:</label>
        <input type="text" class="form-control" placeholder="Title" name="title">
    </div>
    <div class="form-group">
        <label for="article">Content:</label>
        <textarea name="content" class="form-control" rows="3" placeholder="Content"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">
            ADD
        </button>
    </div>
</form>

@endsection