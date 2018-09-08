@extends('layout')
@section('content')
    <div class="d-flex justify-content-center flex-column">
        <header class="text-center">
            <h1>
                MINHNT - PHP12
            </h1>
        </header>
        <div>
            @if($message = Session::get('success'))
                <p class="alert alert-success">
                    {{$message}}
                </p>
            @endif
        </div>
        <div>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$article->title}}</td>
                            <td>{{$article->content}}</td>
                            <td class="d-flex">
                                <a href="" class="btn btn-primary m-1">
                                    Show
                                </a>
                                <a href="" class="btn btn-success m-1">
                                    Edit
                                </a>
                                <form method="post"  class="d-inline">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger m-1 ">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <a href="" class="btn btn-primary">
                Add More
            </a>
        </div>
    </div>
@endsection