<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{print_r($nose)}}

    <br>
    <br>

    @foreach($nose as $item)
        {{$item}}
    @endforeach
    
    <br>
    <br>
    
    {{print_r($ScoresArray)}}
    
    <br>
    <br>

    @php
        $i = 0;
    @endphp

    @foreach($QuestionsArray as $Question)

        @if($i < sizeof($QuestionsArray))
        <span> {{$Question->content . " = " . $ScoresArray[$i]}}</span>
        <br>
        
        @php 
            $i += 1
        @endphp

        @endif

    @endforeach

    

</body>
</html>