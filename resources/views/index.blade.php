<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/homelaravel/public/bootstrap4/css/bootstrap.min.css">
    <script src="http://localhost/homelaravel/public/bootstrap4/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach($categories as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>


        </tr>
    @endforeach

</table>
</body>
</html>
