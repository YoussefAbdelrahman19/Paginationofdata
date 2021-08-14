<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <p>PaginationController</p>
    <table class="table table-striped">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
    @foreach ($users as $user )

        <tr>
    <td>The Name is :{{$user->Name}}</td>
    <td>The email is :{{$user->Email}}</td>
    <td> Phone is :{{$user->Phone}}</td>

    @endforeach
</tr>
</table>
    <div class="col-sm-12">
   <p class="col-sm-12"> {{$users->links()}}</p>
</div>
</body>
</html>
