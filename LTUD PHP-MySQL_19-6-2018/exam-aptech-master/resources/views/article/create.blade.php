@extends('master')
@section('content')
    <div class="d-flex flex-column">
        <form action="{{route('articles.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea rows="5" class="form-control" name="content">
                </textarea>
            </div>
            <button class="btn btn-primary form-control">
                Submit
            </button>
        </form>
    </div>
@endsection