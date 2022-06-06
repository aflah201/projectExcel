<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="https://avatars.dicebear.com/api/bottts/example.svg?options%5Bcolors%5D%5B%5D=cyan"
                class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/home') }}" class="{{ request()->is('home') ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/attendance') }}"
                    class="{{ request()->is('attendance') ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                        Attendance
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/user') }}" class="{{ request()->is('user') ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <li class="nav-header">LABELS</li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    <p class="text">Logout</p>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>

{{-- <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./dashboard">
                <img src="https://avatars.dicebear.com/api/bottts/example.svg?options%5Bcolors%5D%5B%5D=cyan" alt="" width="40px">
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100 {{ request()->is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/home') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ url('/attendance') }}">
                    <i class="fe fe-calendar fe-16"></i>
                    <span class="ml-3 item-text">Absensi Kehadiran</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ url('/user') }}">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">Pengguna</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#medsos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-globe fe-16"></i>
                    <span class="ml-3 item-text">Media Sosial</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="medsos">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="https://www.facebook.com/MadrasahAliyahBirulUlum" target="blank">
                            <i class="fe fe-facebook fe-16"></i>
                            <span class="ml-3 item-text">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="https://www.instagram.com/ma.birululum_official/" target="blank">
                            <i class="fe fe-instagram fe-16"></i>
                            <span class="ml-3 item-text">Instagram</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="https://twitter.com/ma_birululum" target="blank">
                            <i class="fe fe-twitter fe-16"></i>
                            <span class="ml-3 item-text">Twitter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="https://www.youtube.com/channel/UCaJvQAty5wHXIPp0XB8dpkw"
                            target="blank">
                            <i class="fe fe-youtube fe-16"></i>
                            <span class="ml-3 item-text">Youtube</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="logout">
                    <i class="fe fe-log-out fe-16"></i>
                    <span class="ml-3 item-text">Log out</span>
                </a>
            </li>
        </ul>
    </nav>
</aside> --}}
