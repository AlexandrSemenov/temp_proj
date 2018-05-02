@extends('layout.main_layout')
    @section('content')

        <p>День недели: {{$week_day}}</p>
        @foreach($meals as $meal)
            <p>
                <span>{{$meal->time_name}}, {{$meal->name}}, calories: {{$meal->calories}}, weight: {{$meal->weight}}</span>
            </p>
        @endforeach

    @endsection