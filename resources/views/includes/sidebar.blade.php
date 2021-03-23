<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="/"><i class
                        ="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Data User</li><!-- /.menu-title -->
                <li class="">
                    <a href="/users"> <i class="menu-icon fa fa-user-plus"></i>User</a>
                </li>
                <li class="">
                    <a href="/santri"> <i class="menu-icon fa fa-users"></i>Santri</a>
                </li>

                <li class="menu-title">Data Agenda</li><!-- /.menu-title -->
                <li class="">
                    <a href="/muhadoroh"> <i class="menu-icon fa fa-microphone"></i>Muhadoroh</a>
                </li>
                <li class="">
                    <a href="/hafalanfiqih"> <i class="menu-icon fa fa-book"></i>Hafalan FiQih</a>
                </li>
                <li class="">
                    <a href="/hafalanquran"> <i class="menu-icon fa fa-bookmark"></i>Hafalan Al-Qur'an</a>
                </li>
                <li class="">
                    <a href="/jadwalpiket"> <i class="menu-icon fa fa-calendar"></i>Jadwal Piket</a>
                </li>

                {{-- <li class="menu-title">Sistem</li><!-- /.menu-title --> --}}
                {{-- <li class="menu-icon fa fa-sign-out">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-jet-dropdown-link>
                    </form>
                </li> --}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->