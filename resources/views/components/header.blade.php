<style>
    @media (max-width: 576px) {
        .navbar {
            width: 90%;

        }

    }

    .navbar {
        background-color: black;
        margin: 0%;
        height: auto;

    }

    .navbar .nav-link {
        color: white;

    }


    .btn {
        text-decoration: none;

        width: auto;
        height: auto;
        background-image: linear-gradient(158deg, #281F30 0%, #383838 97%);

    }

    .btn_span {
        color: #fff;
    }

    .t-color {
        color: #fff;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<nav class="navbar">
    <div class="container navbar">
        <div>
            <a class="nav-link" href="{{ url('https://www.scorpiafx.com/') }}">
                {{-- <img class="img-fluid" style="width: 83px; height: 83px;"
                    src="https://github.com/TrickyVikram/scorpiafx_Dashboard/blob/main/public/favicon_io/apple-touch-icon.png"
                    alt=""> --}}
                {{-- {{ config('app.name', 'scorpiafx') --}}
            </a>
        </div>
        <div style="padding-left: 9%; display:flex;">
            <a class="nav-link" href="{{ url('https://www.scorpiafx.com/') }}">Home</a>
            <a href="{{ url('https://www.scorpiafx.com/#challenge') }}" class="nav-link">Challenge</a>
            <a href="{{ url('https://www.scorpiafx.com//help') }}" class="nav-link">FAQ</a>
            <a href="{{ url('https://www.scorpiafx.com//contact') }}" class="nav-link">Support</a>
            <a href="{{ url('https://www.scorpiafx.com/#affiliate') }}" class="nav-link">Affiliate</a>
        </div>
        <div class="navbar" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto"></ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-link">
                            <ul>
                                @if (request()->path() !== 'login')
                                    {{-- <a class=" btn11" href="{{ route('login') }}">re</a> --}}
                                @else
                                    <a class="btn" href="{{ route('login') }}"> <span class="btn_span"> DASHBOARD </span>
                                    </a>
                                @endif
                            </ul>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('login') }}" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                    @endguest
            </ul>
        </div>
    </div>
</nav>
