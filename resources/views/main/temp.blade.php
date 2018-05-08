@extends('layout.main_layout')
@section('content')

    <div class="container">


        <div id="meals-list" v-cloak>

            <div class="row" style="margin-bottom: 50px;">
                @foreach($menu_days as $menu_day)
                    <button v-on:click="clickBtn" attr-menu="{{$menu_id}}" attr-day="{{$menu_day->id}}">{{$menu_day->week_day()->first()->name}}</button>
                @endforeach
            </div>


            <div class="row lists">

                @foreach($meals as $meal)
                    <div v-if="state === true" class="col-md-3 list-item">
                        <img src="{{$meal->image}}" alt="">
                        <p>{{$meal->time_name}}, {{$meal->name}}</p>
                    </div>
                @endforeach()

                <div v-else class="col-md-3 list-item" v-for="item in items">
                    <img v-bind:src="item.image" alt="">
                    <p>@{{ item.time_name }}, @{{ item.name }}</p>
                </div>
            </div>
        </div>

    </div>

@endsection