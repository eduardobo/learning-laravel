@extends('plantilla')

@section('seccion')
    <h1>este es mi equipo de trabajo</h1>
    @foreach($equipo as $item)
        <a href="{{route('we',$item)}}">{{$item}}</a> <br>
    @endforeach

    @if(!empty($nombre))
        @switch($nombre)
            @case($nombre=='Paco')
            <h2 class="mt-5">El nombre es {{$nombre}}</h2>
            <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ipsum laboriosam necessitatibus iure cum maxime laudantium expedita cumque ullam libero enim illo magnam molestiae mollitia sed tempore debitis, at magni vitae ipsa? Cumque illo nemo minima voluptate, explicabo voluptas aperiam quod suscipit nesciunt facilis quae. Ab eius ad nemo libero!</p>
            @break
            @case($nombre=='Juanito')
            <h2 class="mt-5">El nombre es {{$nombre}}</h2>
            <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ipsum laboriosam necessitatibus iure cum maxime laudantium expedita cumque ullam libero enim illo magnam molestiae mollitia sed tempore debitis, at magni vitae ipsa? Cumque illo nemo minima voluptate, explicabo voluptas aperiam quod suscipit nesciunt facilis quae. Ab eius ad nemo libero!</p>
            @break
            @case($nombre=='Mauricio')
            <h2 class="mt-5">El nombre es {{$nombre}}</h2>
            <p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ipsum laboriosam necessitatibus iure cum maxime laudantium expedita cumque ullam libero enim illo magnam molestiae mollitia sed tempore debitis, at magni vitae ipsa? Cumque illo nemo minima voluptate, explicabo voluptas aperiam quod suscipit nesciunt facilis quae. Ab eius ad nemo libero!</p>
            @break
        @endswitch
    @endif
@endsection