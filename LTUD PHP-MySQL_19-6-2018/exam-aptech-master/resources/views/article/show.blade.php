@extends('master')
@section('content')
    <div class="d-flex justify-content-center flex-column">
        <header class="text-center">
            <h1>
                NGUYEN DUY - APTECH PHP 12
            </h1>
        </header>
        <div>
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created Date</th>
                    <th>Updated Date</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->content}}</td>
                        <td>{{$article->created_at}}</td>
                        <td>{{$article->updated_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection