<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
        </tr>
        @foreach ($allCategory as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->category}}</td>
            <td>{{$item->photo}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>