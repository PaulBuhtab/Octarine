@extends('templates.panel')

@section('color')primary @stop

@section('header')
    <a href="/classes/{{$class->id}}">
        {{$class->number.$class->letter}}
    </a>
@stop

@section('body')
    @foreach($users as $user)
        <?php
        $user_info = (object)$user;
        $user_info = DB::select("SELECT * FROM users WHERE id='".$user->id."'");
        $user_info = $user_info[0];
        ?>
        <a>{{$user_info->name}}</a>
    @endforeach
@stop