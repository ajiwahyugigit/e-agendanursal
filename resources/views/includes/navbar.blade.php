 <!-- Header-->
 <header id="header" class="header">
    <div class="top-left">
        <div class="navbar-header">
            <a class="navbar-brand" href="./"><img src="{{url('backend/images/logonus.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{url('backend/images/logo.png"')}} alt="Logo"></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <div class="top-right">
        <div class="header-menu">

            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{url('backend/images/admin.jpg')}}" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-jet-dropdown-link>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
<!-- /#header -->