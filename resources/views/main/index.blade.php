@extends('layout.main_layout')
    @section('content')

        <p>День недели: {{$week_day}}</p>
        @foreach($meals as $meal)
            <p>
                <span>name: {{$meal->name}}, calories: {{$meal->calories}}</span>
            </p>
        @endforeach

    @endsection