@php
    $containerNav = $containerNav ?? 'container-fluid';
    $navbarDetached = $navbarDetached ?? '';

@endphp


<style>
    @media screen and (max-width: 576px) {

        .home_link {
            display: flex;
            color: white;
            padding-left: 0%;
        }

        .home_link a {
            color: white;
            padding: 3px;
        }

    }

    @media screen and (max-width: 1440px) {
        .home_link {
            display: flex;
            color: white;
            padding-left: 34%;
        }

        .home_link a {
            color: white;
            padding: 5px;
        }
    }

    .text-xl {
     margin-left: 111px;
   

    }
     .user_name {
   
        margin-top: -22px;
         font-size: 26px;
     color: white;

    }
     .wlc {
      margin-left: -120px;
    font-size: 22px;



    }

    .user_img {
        margin-top: 5px;
    }

    .edit {
        color: rgb(198 207 204);
    margin-top: -18px;
    margin-left: 76px;
    }
</style>
<!-- Navbar -->
@if (isset($navbarDetached) && $navbarDetached == 'navbar-detached')
    <nav class="layout-navbar {{ $containerNav }} navbar navbar-expand-xl {{ $navbarDetached }} align-items-center bg-navbar-theme"
        id="layout-navbar">
@endif
@if (isset($navbarDetached) && $navbarDetached == '')
    <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
        <div class="{{ $containerNav }}">
@endif

<!--  Brand demo (display only for navbar-full and hide on below xl) -->
@if (isset($navbarFull))
    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
        <a href="{{ url('/') }}" class="app-brand-link gap-2">
            <span class="app-brand-logo demo">
                @include('_partials.macros', ['height' => 20])
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-1">{{ config('variables.templateName') }}</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
        </a>
    </div>
@endif

<!-- ! Not required for layout-without-menu -->
@if (!isset($navbarHideToggle))
    <div
        class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0{{ isset($menuHorizontal) ? ' d-xl-none ' : '' }} {{ isset($contentNavbar) ? ' d-xl-none ' : '' }}">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="mdi mdi-menu mdi-24px"></i>
        </a>
    </div>
@endif



<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

 <!-- image section -->
 
<!-- HTML -->
<div class="user_img">
    <div>
        <!-- Small image -->
     
        <div class="text-xl" >
              <span class=" wlc"> Welcome back </span>
            <span class="user_name"  >  {{ Auth::user()->name }} </span>
        </div>
    </div>
</div>

<!-- Full image modal -->



<!-- image section -->



    <!-- Search -->
    {{-- <div class="navbar-nav align-items-center">
        <form action="{{ route('search') }}" method="GET">
        <div class="nav-item d-flex align-items-center">
            <i class="mdi mdi-magnify mdi-24px lh-0"></i>
            <input type="text" name="query" class="form-control border-0 shadow-none bg-body" placeholder="Search..."
                aria-label="Search...">
        </div>
       

    </div> --}}
    <!-- /Search -->
    {{-- 
    <div class="home_link">
        <a class="nav-link" href="{{ url('https://www.scorpiafx.com/') }}">Home</a>
        <a href="{{ url('https://www.scorpiafx.com/#challenge') }}" class="nav-link">Challenge</a>
        <a href="{{ url('https://www.scorpiafx.com//help') }}" class="nav-link">FAQ</a>
        <a href="{{ url('https://www.scorpiafx.com//contact') }}" class="nav-link">Support</a>
        <a href="{{ url('https://www.scorpiafx.com/#affiliate') }}" class="nav-link">Affiliate</a>
    </div> --}}

    <ul class="navbar-nav flex-row align-items-center ms-auto">

        <!-- Place this tag where you want the button to render. -->
        {{-- <li class="nav-item lh-1 me-3">
            <a class="github-button" href="" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="">Star</a>
          </li> --}}

        <!-- User -->


        <li class="nav-item navbar-dropdown dropdown-user dropdown">

            @guest
                @if (Route::has('login'))
                @endif
                @if (request()->path() !== 'login')
                @else
                @endif
            @else
                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                                        <img style=" border-radius: 50%;"
                                            src="https://avatars.githubusercontent.com/u/114013697?v=4" alt=""
                                            id="smallImage">
                                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                    <li>
                        <a class="dropdown-item pb-2 mb-1" href="javascript:void(0);">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 pe-1">
                                    <div class="avatar avatar-online">
                                        <img style=" border-radius: 50%;"
                                            src="https://avatars.githubusercontent.com/u/114013697?v=4" alt=""
                                            id="smallImage">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    {{ Auth::user()->name }}
                                    <small class="text-muted">User</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('profile.index') }}" >
                            <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a class="dropdown-item" href="">
                            <i class='mdi mdi-cog-outline me-1 mdi-20px'></i>
                            <span class="align-middle">Settings</span>
                        </a>
                    </li> --}}
                    {{-- <li>
                        <a class="dropdown-item" href="javascript:void(0);">
                            <span class="d-flex align-items-center align-middle">
                                <i class="flex-shrink-0 mdi mdi-credit-card-outline me-1 mdi-20px"></i>
                                <span class="flex-grow-1 align-middle ms-1">Billing</span>
                                <span
                                    class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                            </span>
                        </a>
                    </li> --}}
                    <li>
                        <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                            <i class='mdi mdi-power me-1 mdi-20px'></i> <span class="align-middle">Log Out</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </li>
                </ul>
            @endguest
        </li>
        <!--/ User -->
    </ul>
</div>

@if (!isset($navbarDetached))
    </div>
@endif
</nav>
<!-- / Navbar -->
