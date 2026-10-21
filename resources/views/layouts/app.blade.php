<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS System</title>
    
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/sidebars.css') }}">
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            {{-- <div class="container"> --}}
                <div>
                    <a class="navbar-brand" href="{{ URL('/home') }}">POS System-Laravel 12</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li><a class="nav-link" href="{{ route('users.index') }}">Manage Users</a></li>
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Manage Role</a></li>
                            {{-- <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li> --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            {{-- </div> --}}
        </nav>
    </div>
    
    {{-- @guest

        @if (Route::has('login'))
        @endif
    @else --}}
        {{-- <div class="content"> --}}
            <div class="row justify-content-left mt-2">
                
                {{-- sidebar --}}
                <div class="flex-shrink-0 p-3" style="width: 280px">
                    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                        <svg class="bi pe-none me-2" width="30" height="24" aria-hidden="true">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                        <span class="fs-5 fw-semibold">Collapsible</span>
                    </a>
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false"> Dashboard
                            </button>
                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li>
                                        <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded" >Overview</a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded" >Weekly</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                                data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">Account
                            </button>
                            <div class="collapse" id="account-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    @can('Manage Product')
                                        <li><a class="nav-link" href="{{ route('products.index') }}">Manage Product</a></li>
                                    @endcan
                                    <li>
                                        <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New...</a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- end sidebar --}}
                
                <div class="col-md-10">
                    {{-- <p>Back to Tutorial: 
                        <a href="https://www.allphptricks.com/laravel-12-custom-user-registration-and-login-tutorial/"><strong>Tutorial Link</strong></a>
                    </p>
                    <p>
                        For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/"><strong>AllPHPTricks.com</strong></a>
                    </p> --}}
                    @yield('content')
                </div>
            </div>
        {{-- </div> --}}
    {{-- @endguest --}}
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>