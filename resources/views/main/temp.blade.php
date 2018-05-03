@extends('layout.main_layout')
@section('content')

    <div id="list" class="container">
        <h2>@{{ title }}</h2>
        <ul>
            <li v-for="item in items">@{{ item }}</li>
        </ul>
        <span class="input-group-btn">
            <button v-on:click="ClickButton" attr-day="1" attr-menu="1" class="btn btn-default" type="button">Add!</button>
        </span>
    </div>

@endsection