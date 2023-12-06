<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($id_var as $list)
        
    <p>{{$list->title}}</p>
    <p>{{$list->author}}</p>
    <p>{{$list->content}}</p>
    <img src="{{Storage::url($list->image)}}" alt="" height="500">
    @endforeach
    
</body>
</html>