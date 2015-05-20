<div class='modal @yield('transition',"fade") @yield('add.modal') in' id="@yield('id')" tabindex="-1" role='dialog' aria-labelledby="@yield('id')_label" aria-hidden="true">
    <div class="modal-dialog @yield('add.dialog') modal-@yield('size',"default")">
        @yield('hide.nav','
        <div class="vm-nav vm-nav-left">
            <div class="vm-nav-arr vm-nav-arr-left"></div>
        </div>
        <div class="vm-nav vm-nav-right">
            <div class="vm-nav-arr vm-nav-arr-right"></div>
        </div>')
        <div class="modal-content @yield('add.content')">
            @if (trim($__env->yieldContent('footer')))
                <div class="modal header @yield('add.header') modal-header-@yield('color.header','default')">
                    <div class="modal-title @yield('add.title') modal-title-@yield('color.title')">
                        @yield('header','')
                        @yield('hide.times','
                            <a class="btn btn-sm btn-danger" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span>
                            </a>
                        ')
                    </div>
                </div>
            @endif
            <div class="modal-body @yield('add.body')">
                @yield('content')
            </div>
            @if (trim($__env->yieldContent('footer')))
                <div class="modal-footer @yield('add.footer')">
                    @yield('footer','<button class="btn btn-danger btn-sm" data-dismiss="modal">Закрыть</button>')
                </div>
            @endif
        </div>
	</div>
</div>