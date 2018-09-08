@extends('layout.master') @section('content')
<div class="container">
  <div class="d-flex flex-row">
    <div class="col-12">
      <h3>ADD CATEGORY PAGE</h3>
      <form action="{{route('category-store')}}" method="post">
        <input type="hidden" name="_method" value="post" /> 
        {{csrf_field()}}
        <div class="form-group ">
          <label for="category ">Category Title</label>
          <input type="text " class="form-control " id="category " placeholder="Category Title" name="category">
        </div>
        <div class="form-group ">
          <button class="btn btn-success ">
            ADD
          </button>
        </div>
      </form>
      <form action="{{route('category-store')}}" method="post">
        <input type="hidden" name="_method" value="post" /> 
        {{csrf_field()}}
        <div class="form-group ">
          <label for="category ">Category Content</label>
          <input type="text " class="form-control " id="category " placeholder="Category Content" name="category">
        </div>
        <div class="form-group ">
          <button class="btn btn-success ">
            ADD
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection