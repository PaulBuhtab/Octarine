<div class="panel panel-@yield('color',"default")">
    @if (trim($__env->yieldContent('header')))
        <div class="panel-heading">
            @if (trim($__env->yieldContent('no.title')))
                @yield('header')
            @else
                <h3 class="panel-title">
                    @yield('header')
                </h3>
            @endif
        </div>
    @endif
    <div class="panel-body">
        @yield('body')
    </div>
    @if (trim($__env->yieldContent('footer')))
        <div class="panel-footer">
            @yield('footer',"")
        </div>
    @endif
</div>