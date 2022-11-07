<!-- ======= Header ======= -->
<header id="header_page" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-center">
        <!-- <h1 class="logo"><a href="/">TrashClean</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo rounded"><img src={{ url('assets/img/logo_clean.png') }} alt=""
                class="img-fluid"></a>

        <nav id="navbar_page" class="navbar_page">
            <ul>
                <li><a class="nav-link scrollto" href="/">Beranda</a></li>
                <li><a class="nav-link scrollto {{ request()->is('tentang') ? 'active' : '' }}"
                        href="/tentang">Tentang</a>
                </li>
                <li><a class="nav-link scrollto {{ request()->is('katalog') ? 'active' : '' }}"
                        href="/katalog">Katalog</a>
                </li>
                <li><a class="nav-link scrollto {{ request()->is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
                </li>
                <li class="dropdown"><a href="#"
                        class="{{ request()->is('tutorial*') ? 'active' : '' }}"><span>Blog Informasi</span>
                        <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Berita</a></li>
                        <li><a href="/tutorial">Tutorial</a></li>
                    </ul>
                </li>
                @if (Auth::check())
                    @php
                        $role = Auth::user()->role . '*';
                        $name = explode(' ', trim(Auth::user()->nama));
                    @endphp
                    <li class="dropdown"><a href="#"
                            class="nav-link scrollto {{ request()->is($role) ? 'active' : '' }}"><span>{{ $name[0] }}</span>
                            <i class="bi bi-person-circle text-white"></i> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto"
                                    href="{{ '/' . Auth::user()->role . '/dashboard' }}">Dashboard</a></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li><a class="nav-link scrollto" href="/login">Login</a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
