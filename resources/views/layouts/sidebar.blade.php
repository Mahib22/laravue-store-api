<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Barang</li>
                <li class="">
                    <a href="#"> <i class="menu-icon fa fa-list"></i>Lihat Barang</a>
                </li>
                <li class="">
                    <a href="#"> <i class="menu-icon fa fa-plus"></i>Tambah Barang</a>
                </li>

                <li class="menu-title">Foto Barang</li>
                <li class="">
                    <a href="#"> <i class="menu-icon fa fa-list"></i>Lihat Foto Barang</a>
                </li>
                <li class="">
                    <a href="#"> <i class="menu-icon fa fa-plus"></i>Tambah Foto Barang</a>
                </li>

                <li class="menu-title">Transaksi</li>
                <li class="">
                    <a href="#"> <i class="menu-icon fa fa-list"></i>Lihat Transaksi</a>
                </li>

                @auth
                    <li class="menu-title">{{ Auth::user()->name }}</li>
                    <li class="">
                        <a href="{{ route('register') }}"> <i class="menu-icon fa fa-user-plus"></i>Buat Akun</a>
                    </li>

                    <li class="">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="menu-icon fa fa-power-off"></i>{{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
</aside>
