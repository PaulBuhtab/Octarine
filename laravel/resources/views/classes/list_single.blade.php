@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            @include('classes.single',[
                'users' => $users,
                'class' => $class
            ])
        </div>
    </div>
@stop