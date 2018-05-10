@extends('layouts.main')
@section('stylesheet')
    <link href="{{ asset('assets/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/assets/css/light-bootstrap-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
@endsection
@section('content')
<body>
    @include('layouts.sidenav')
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo">Products</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">7</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                     <i class="nc-icon nc-single-02"></i>
                                    <!-- <span class="no-icon">Account</span> -->
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Category</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Courier</a>
                                    <a class="dropdown-item" href="#">Vendor</a>
                                    <a class="dropdown-item" href="#">Customer</a>
                                   
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Admin</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./index.html">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Products Display</h4>  
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                 <!-- <div class="col-md-6">
                            <article class="col-item">
                                <div class="photo">
                                    <div class="options-cart-round">
                                    </div>
                                    <a href="#"> <img class="img-responsive" src="https://unsplash.it/500/300?image=0" alt="Product Image"> </a>
                                </div></article></div>
                                </div>
                                </div> -->
                                 <div class="col-md-6">
                            <article class="col-item">
                                <div class="photo">
                                    <div class="options-cart-round">
                                    </div>
                                    <a href="#"> <img class="img-responsive" src="https://unsplash.it/500/300?image=0" alt="Product Image"> </a>
                                </div></article></div>
                                </div>
                                </div>
                                
                                    <!-- <h5>-->
                                    <!-- <h5>
                                        <small>Notifications Style</small>
                                    </h5>  -->

                                </div>
                                <!-- <div class="col-md-6">
                                    <h5>
                                        <small>Notification States</small>
                                    </h5>

                                </div> -->
                            </div>
                            <br>
                            <br>
                            <div class="places-buttons">
                                <div class="row">
                          </div>
                          </div>
                          </div>         
                    </div>
                    <!--  End Modal -->
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="./index.html">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="./index.html">Niche</a>, everything-anytime
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
@endsection