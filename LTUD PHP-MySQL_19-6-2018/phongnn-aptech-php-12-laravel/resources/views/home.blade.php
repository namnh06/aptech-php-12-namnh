<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
  <div class="container">
          <div class="jumbotron p-3 p-md-5 text-black rounded bg-info">
                <div class="col-lg-12 margin-tb d-flex">
                    <div class="d-flex justify-content-start">
                        <h3>NGUYEN HAI NAM APTECH PHP 12</h3>
                    </div>
                    <div class="d-flex justify-content-end ml-auto">
                        <a href="{{route('create')}}" type="button" class="btn btn-success">Create New Article</a>
                    </div>
                </div>
              <table class="table table-bordered table-info"> 
                <thead>
                  <tr>
                    <th scope="col-1">No</th>
                    <th scope="col-4">Title</th>
                    <th scope="col-4">Content</th>
                    <th scope="col-3">Acticon</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($home as $row)
                  <tr>
                    <th scope="row">{{$row->id}}</th>
                    <td>{{$row->title}}</td>
                    <td>{{$row->content}}</td>
                    <td class="d-flex justify-content-between">
                        <button type="button" class="btn btn-info"><a href="show">Show</a></button>
                        <button type="button" class="btn btn-primary"><a class="text-warning" href="article/edit/{{$row->id}}">Edit</a></button>
                        <button type="button" class="btn btn-danger"><a href="{{route('delete',$row->id)}}">Delete</a></button>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
         </div>
  </div>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">  
</body>
</html>