<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'GMSSS Maloya') }}</title>


    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css" />

    <!-- Font osm -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- trix -->


    @livewireStyles
    <link href="{{ config('app.path') }}css/app.css" rel="stylesheet" />

</head>

<body>
    @livewire('header')

    <nav class="navbar navbar-expand-lg  navbar-light bg-light sticky-top {
">
        <div class="container-fluid hcolor">
            <a class="navbar-brand" href="/"></a>
            <button class="navbar-toggler border-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3" >
                    <li class="nav-item ms-5" >
                        <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" aria-current="page" href="/">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown d">
                        <a class="nav-link dropdown-toggle" href="#/" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu hcolor" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="/mission">
                                   Mission
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/history">
                                    History Of School
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/infrastructure">
                                Infrastructure
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == 'schooldetails' ? 'active' : '' }}" href="/schooldetails">
                            School Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == 'principaldesk' ? 'active' : '' }}" href="/principaldesk">
                            Principal Desk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == 'affiliation' ? 'active' : '' }}" href="/affiliation">
                        Tenders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == 'Mandatory' ? 'active' : '' }}" href="/Mandatory">
                        Mandatory Disclosures
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == 'gallerycategory' ? 'active' : '' }}" href="/gallerycategory">
                            Photo Gallery
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == 'contactus' ? 'active' : '' }}" href="/contactus">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row flex-nowrap ">
            <div class="col-auto col-md-3 col-xl-2 px-sm-0 px-0 " style="width: 11%;">
                <div class="d-flex flex-column align-items-start align-items-sm-start px-0 pt-0 text-white min-vh-100">
                    <a href="/" class="d-flex quick-link align-items-center justify-content-start pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <i class="fa-solid fa-link mt-3 "></i>
                        <span class="fs-5 d-none d-sm-inline mt-3 ms-1">
                            Quick Links
                        </span>
                    </a>
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-black min-vh-100 color">
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">

                            <li>
                                <a href="/events" class="nav-link px-0 align-middle ">
                                    <i class="fa-solid fa-calendar-days
                        manu-icon {{ Request::path() == 'events' ? 'active' : '' }}"></i>
                                    <span class="ms-0 d-none d-sm-inline tColor {{ Request::path() == 'events' ? 'active' : '' }}">News/Events
                                    </span>
                                </a>
                            </li>
                                <a class="nav-link px-0 align-middle " href="/teaching">
                                    <i class="fa-solid fa-person manu-icon {{ Request::path() == 'teaching' ? 'active' : '' }}"></i>
                                    <span class="ms-1 d-none d-sm-inline tColor {{ Request::path() == 'teaching' ? 'active' : '' }}">
                                        Staff Details
                                    </span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col" style="width: 100px;">
                <!--  contact here   -->
                {{ $slot }}

            </div>
        </div>
    </div>
    @livewire('footer')
    @livewireScripts
    <script>  
    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-5px');
        }
    });

    </script>
</body>

</html>