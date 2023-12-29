<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello Mr {{$nom}}</h1>
    <!-- try to change the if condition to (count($languages)<0) to see the diferance -->
    @if(count($languages)>0)
    <h3>this is a list of some programming language :</h3>
    <ul>
        @foreach($languages as $language)
            <li>{{$language}}</li>
        @endforeach
    </ul>
    @endif

    <!-- the same code using unless -->
    @unless(count($languages)<0)
    <h3>this is a list of some programming language :</h3>
    <ul>
        @foreach($languages as $language)
            <li>{{$language}}</li>
        @endforeach
    </ul>
    @endunless

    <!-- unless != if -->
</body>
</html>