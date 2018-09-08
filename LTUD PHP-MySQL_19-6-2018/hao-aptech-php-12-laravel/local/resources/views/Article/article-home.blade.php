@extends('layout.master') @section('content')
<div class="container">
  <div class="d-flex flex-row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <caption>
          <div class="d-flex justify-content-between align-items-center">
            <span>
              List of categories
            </span>
            <form action="{{route('row-create')}}" method="get">
              <button class="btn btn-success">
                Add More
              </button>
            </form>
          </div>
        </caption>
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="w-75 ">Name</th>
            <th scope="col" class="w-25">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($Articles as $row)
          <tr class="text-center">
            <th scope="row">{{$row->id}}</th>
            <td>{{$row->name}}</td>
            <td class="d-flex flex-row justify-content-center">
              <form action="{{route('row-detail',$row->id)}}" method="get">
                <button class="btn btn-sm btn-primary mx-2">
                  Show
                </button>
              </form>
              <form action="{{route('row-edit',$row->id)}}" method="get">
                <button class="btn btn-sm btn-warning mx-2">
                  Edit
                </button>
              </form>
              <form action="{{route('row-destroy',$row->id)}}" method="post">
                <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                <button class="btn btn-sm btn-danger mx-2">
                  Delete
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection