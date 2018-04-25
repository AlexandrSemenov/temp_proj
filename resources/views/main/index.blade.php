@extends('layout.main_layout')
    @section('content')

        @foreach($meals as $meal)
            <p>
                <span>name: {{$meal->name}}, calories: {{$meal->calories}}</span>
            </p>
        @endforeach

    @endsection