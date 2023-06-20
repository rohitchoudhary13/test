<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        b4- <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="navId">
            <li class="nav-item">
                <a href="{{url('/add/user')}}" class="nav-link active">Add User</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/view/user')}}" class="nav-link active">View User</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/assign/task')}}" class="nav-link active">Assign Task</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/view/task')}}" class="nav-link active">View Task</a>
            </li>
        </ul>
    </div>
  </body>
</html>