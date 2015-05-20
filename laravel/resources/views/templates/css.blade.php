<?php
$styles_global = Storage::files('system/css/all');//Подключение стилей, нужных на каждой странице
$styles_module = Storage::files('system/css/'. Route::currentRouteName());
$styles = array_merge($styles_global,$styles_module);
?>
@foreach( $styles as $style)
    <link rel="stylesheet" href="/laravel/storage/app/{{$style}}"/>
@endforeach