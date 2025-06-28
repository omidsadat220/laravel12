<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Sub Categoyr</title>
</head>
<body>
    <h1>Add Subcateogry</h1>
    <form action="{{ route('store.subcategory') }}" method="post">
        @csrf
        Category Name:<input type="text" name="name">
        <select name="category_id" id="category_id">
            @foreach ($subcategory as $item)
                <option value="{{$item->id}}">{{$item->category}}</option>
            @endforeach
        </select>
        <button type="submit">Save </button>
    </form>
</body>
</html>