@extends('layout.master') @section('content')
<div class="container">
  <div class="d-flex flex-row">
    <div class="col-12">
      <h3>EDIT Article PAGE</h3>
      <form action="{{route('Article-update',$Article->id)}}" method="post">
        <input type="hidden" name="_method" value="put" /> 
        {{csrf_field()}}
        <div class="form-group">
          <label for="Article">Article Name</label>
          <input type="text " class="form-control" id="Article" placeholder="Article Name" name="Article" value="{{$Article->name}}">
        </div>
        <div class="form-group ">
          <button class="btn btn-info ">
            EDIT
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection