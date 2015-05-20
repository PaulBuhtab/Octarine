@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($classes as $class)
                <div class="col-md-6">
                    <?php
                    $users = DB::table('users_classes')
                        ->where('class',$class->id)
                        ->get();
                    ?>
                    @include('classes.single',[
                    'users' => $users,
                    'class' => $class
                    ])
                </div>
            @endforeach
        </div>
    </div>
@stop


