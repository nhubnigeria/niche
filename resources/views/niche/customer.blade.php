@extends('layouts.main')
@section('stylesheet')
    <link href="{{ asset('assets/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/assets/css/light-bootstrap-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
@endsection
@section('content')
    <div class="wrapper">
            @include('layouts.sidenav')
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> Customer </a>
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
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Categories</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="./courier.html">Courier</a>
                                    <a class="dropdown-item" href="./vendor.html">Vendor</a>
                                    <a class="dropdown-item" href="./user.html">Customer</a>
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
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="card card-plain table-plain-bg">
                                    <div class="card-header ">
                                        <h4 class="card-title">User Details</h4>
                                    </div>
                                    <div class="card-body table-full-width table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Category</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Dakota Rice</td>
                                                    <td>dakoric1</td>
                                                    <td>1 Allen Avenue</td>
                                                    <td>dakky@rice.com</td>
                                                    <td>Vendor</td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                        </div>
                    </div>
                </div>
            </div>
           @include('layouts.footer')
        </div>
    </div>
@endsection      
