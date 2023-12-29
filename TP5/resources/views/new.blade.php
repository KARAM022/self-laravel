<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select> 
        @for ($index1 = 0; $index1 <= 9; $index1++)
            <option>{{$index1}}</option>
        @endfor
    </select>
    <select>
        @for ($index2 = 0; $index2 <= 1000; $index2++)
            @if ($index2 % 2 != 0)
                <option>{{$index2}}</option>
            @endif
        @endfor
    </select>
    <select>
        @for ($index3 = 1; $index3 <= 1000; $index3 = $index3 + 2)
                <option>{{$index3}}</option>
        @endfor
    </select>
</body>
</html>