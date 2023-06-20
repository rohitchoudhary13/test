<!doctype html>
<html lang="en">
  <head>
    <title>Assign Task</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{url('/')}}/adduser" method="post">
        <div class="container">
            <h1 class="text-center">Assign Task</h1>
            <div class="form-group">
                <label for="users">Choose User</label>
                <select class="form-control" name="user_id" id="">
                    <option>Choose a user</option>
                    @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Task</label>
                <input type="text" name="task" id="" class="form-control" />
            </div>
            <div class="form-group">
                <label for="">Task Status</label>
                <select class="form-control" name="task_status" id="">
                    <option>Pending</option>
                    <option>Done</option>
                </select>
            </div>
            {{-- <div class="form-group">
                <label for="">Task Status</label>
                <input type="text" name="task_status" id="" class="form-control" />
            </div>     --}}
        </div>
        <button class="btn btn-primary">
           Submit
        </button>
        </form>
    </body>
</html>