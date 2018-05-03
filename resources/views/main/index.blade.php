@extends('layout.main_layout')
    @section('content')

        @foreach($meals as $meal)
            <p>
                <span>{{$meal->time_name}}, {{$meal->name}}, calories: {{$meal->calories}}, weight: {{$meal->weight}}</span>
            </p>
        @endforeach

    @endsection