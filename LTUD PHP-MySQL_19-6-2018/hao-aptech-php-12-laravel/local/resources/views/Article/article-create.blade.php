@extends('layout.master') @section('content')
<div class="container">
  <div class="d-flex flex-row">
    <div class="col-12">
      <h3>ADD Artiscles PAGE</h3>
      <form action="{{route('Artiscles-store')}}" method="post">
        <input type="hidden" name="_method" value="post" /> 
        {{csrf_field()}}
        <div class="form-group ">
          <label for="Artiscles ">Artiscles Name</label>
          <input type="text " class="form-control " id="Artiscles " placeholder="Artiscles Name" name="Artiscles">
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