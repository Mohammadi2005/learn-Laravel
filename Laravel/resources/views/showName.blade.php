<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Name</title>
</head>
<body>
<div style="background-color: #905555; justify-content: center">
    <h1>{{$name}}</h1>

    @if(!($age == 2))
        <p>ok</p>
    @endif

    @if ($age > 20)
        <p>{{$name}} is more then 20 years old</p>
    @elseif($age < 20)
        <p>{{$name}} is less then 20 years old</p>
    @else
        <p>{{$name}} is 20 years old</p>
    @endif

    @switch($name)
        @case("amir")
            <p>name : amir</p>
            @break
        @case("hossein")
            <p>name : hossein</p>
            @break
        @case("amir hossein")
            <p>name : amir hossein</p>
            @break
        @default
            <p>i dont know what is name</p>
    @endswitch

    @foreach($Colors as $color)
        @if($loop->first)
            <h2>
        @endif
        {{$color}}<br>
        @if($loop->first)
            </h2>
        @endif
    @endforeach
{{--@for() @endfor--}}
{{--@foreach() @endforeach--}}
{{--@while() @endwhile--}}


</div>
</body>
</html>
