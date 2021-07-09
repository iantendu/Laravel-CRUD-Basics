<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Videos</title>
</head>

<body>

    @foreach($data as $item){
    {{$item->title}}
    }
    @endforeach

</body>

</html>