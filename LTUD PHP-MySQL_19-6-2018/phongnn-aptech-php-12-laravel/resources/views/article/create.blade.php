<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="jumbotron p-3 p-md-5 text-black rounded bg-info">
        <form action="{{ route('postCreate')}}" method="POST">
        <input type ="hidden" name="_token" value="{{csrf_token()}}" />
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
                <label>Content</label>
                <input type="text" class="form-control" name="content">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>  
  </div>  
</body>
</html>