@extends('master')
@section('content')
    <div class="d-flex justify-content-center flex-column">
        <header class="text-center">
            <h1>
                NGUYEN DUY - APTECH PHP 12
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
                                <a href="{{route('articles.show', $article->id)}}" class="btn btn-primary m-1">
                                    Show
                                </a>
                                <a href="{{route('articles.edit', $article->id)}}" class="btn btn-success m-1">
                                    Edit
                                </a>
                                <form method="post" action="{{route('articles.destroy', $article->id)}}" class="d-inline">
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
            <a href="{{route('articles.create')}}" class="btn btn-primary">
                Add More
            </a>
        </div>
    </div>
@endsection