@extends('layout.main_layout')
@section('content')

    <div class="container">

        <div id="list" v-cloak>
            <h2>@{{ title }}</h2>
            <ul>
                <li v-for="item in items">@{{ item }}</li>
            </ul>
            <span class="input-group-btn">
            <button v-on:click="ClickButton" attr-day="1" attr-menu="1" class="btn btn-default"
                    type="button">Add!</button>
        </span>
        </div>


        -----------------------------------------------

        <div id="meals-list">

            <div class="row" style="margin-bottom: 50px;">
                @foreach($menu_days as $menu_day)
                    <button v-on:click="clickBtn" attr-day="{{$menu_day->id}}">{{$menu_day->week_day()->first()->name}}</button>
                @endforeach
            </div>


            <ul>
                <li v-for="item in items">@{{ item.time_name }} @{{ item.name }}</li>
            </ul>
        </div>

    </div>

@endsection