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
            <form action="{{route('category-create')}}" method="get">
              <button class="btn btn-success">
                Add More
              </button>
            </form>
          </div>
        </caption>
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="w-50 ">Title</th>
            <th scope="col" class="w-25 ">Content</th>
            <th scope="col" class="w-25">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
          <tr class="text-center">
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->title}}</td>
            <td>{{$category->content}}</td>
            <td class="d-flex flex-row justify-content-center">
              <form action="{{route('category-detail',$category->id)}}" method="get">
                <button class="btn btn-sm btn-primary mx-2">
                  Show
                </button>
              </form>
              <form action="{{route('category-edit',$category->id)}}" method="get">
                <button class="btn btn-sm btn-warning mx-2">
                  Edit
                </button>
              </form>
              <form action="{{route('category-destroy',$category->id)}}" method="post">
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