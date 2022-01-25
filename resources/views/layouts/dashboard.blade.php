<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.head')
</head>
<body id="body-pd">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidebar" id="navbar">
                <div class="content_sidebar d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white">
                    <center><img src="{{url('img')}}/logo_bss.png" width="120" alt=""></center>
                    <div class="mb-auto" style="width: 100%">
                        <div class="row w-full nav__link active mb-0">
                            <a href="{{url('/home')}}" class="py-3 d-flex">
                                <img class="me-3" width="16" src="{{url('img/sidebar')}}/dashboard.svg" alt="">
                                <span class="nav__name">Dashboard</span>
                            </a>
                        </div>
                        <div class="row w-full nav__link mb-0">
                            <a href="{{url('/data')}}" class="py-3 d-flex">
                                <img class="me-3" width="16" src="{{url('img/sidebar')}}/data.svg" alt="">
                                <span class="nav__name">Data</span>
                            </a>
                        </div>
                        <div class="row w-full nav__link mb-0">
                            <a href="{{url('/import')}}" class="py-3 d-flex">
                                <img class="me-3" width="16" src="{{url('img/sidebar')}}/import.svg" alt="">
                                <span class="nav__name">Import</span>
                            </a>
                        </div>
                        <div class="row w-full nav__link mb-0">
                            <a href="#" class="py-3 d-flex">
                                <img class="me-3" width="16" src="{{url('img/sidebar')}}/user.svg" alt="">
                                <span class="nav__name">User</span>
                            </a>
                        </div>
                    </div>

                    
                    <div class="button_logout">

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                            @csrf
                            <button>Logout</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col py-3">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.partials.footer')
    <script src="{{url('js')}}/sidebar.js"></script>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>
</html>
