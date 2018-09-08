@extends('layout.master') @section('content')
<div class="container">
  <div class="d-flex flex-row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <caption>
          <div class="d-flex justify-content-between align-items-center">
            <span>
              Artiscles Detail
            </span>
            <form action="{{route('Artiscles-create')}}" method="get">
              <button class="btn btn-success">
                Add Another One
              </button>
            </form>
          </div>
        </caption>

        <thead class="">
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="w-25">Name</th>
            <th scope="col" class="w-25">Created Date</th>
            <th scope="col" class="w-25">Updated Date</th>
            <th scope="col" class="w-25">Action</th>

          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <th scope="row">{{$Artiscles->id}}</th>
            <td>{{$Artiscles->name}}</td>
            <td>{{$Artiscles->created_at}}</td>
            <td>{{$Artiscles->updated_at}}</td>
            <td class="d-flex flex-row justify-content-center">
              <form action="{{route('Artiscles-edit',$Artiscles->id)}}" method="get">
                <button class="btn btn-sm btn-warning mx-2">
                  Edit
                </button>
              </form>
              <form action="{{route('Artiscles-destroy',$Artiscles->id)}}" method="post">
                <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                <button class="btn btn-sm btn-danger mx-2">
                  Delete
                </button>
              </form>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection