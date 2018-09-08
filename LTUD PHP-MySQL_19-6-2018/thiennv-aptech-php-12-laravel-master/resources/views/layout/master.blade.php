<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP12 - Nguyen Viet Thien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="d-flex flex-row">
            <div class="col-12">
                <div class="d-flex flex-row align-items-center">
                    <div class="col-1">
                        <form action="{{route('home')}}" method="get">
                            <button class="btn btn-primary">Home</button>
                        </form>
                    </div>
                    <div class="col-11">
                        <h1 class="text-center">NGUYEN VIET THIEN - APTECH PHP 12</h1>
                    </div>
                </div>
                @section('content')

                @show
            </div>
        </div>
    </div>
</body>
</html>