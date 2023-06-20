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
        <a name='Add User' id="" class="btn btn-primary btn-lg" href="{{url('/add/user')}}" role="button"></a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->mobile}}</td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
        <a name="AssignTask" id="" class="btn btn-primary btn-lg" href="{{url('/view/task')}}" role="button"></a>
        <a name="AssignTask" id="" class="btn btn-primary btn-lg" href="{{url('/view/task')}}" role="button"></a>
    </div>
  </body>
</html>