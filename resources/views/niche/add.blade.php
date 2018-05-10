@extends('layouts.main')
@section('stylesheet')
    <link href="{{ asset('assets/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/assets/css/light-bootstrap-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
@endsection
@section('content')
    <div class="wrapper">
        @include('layouts.sidenav')
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> Admin </a>
                    <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" type="button" href aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="dropdown" href="#">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">7</span>
                                    <span class="d-lg-none">Notifications</span>
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
                                <a class="nav-link" href="#">
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
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" href="http://example.com" aria-expanded="false" aria-haspopup="true">
                                    <span class="no-icon">Category</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="./courier.html">Courier</a>
                                    <a class="dropdown-item" href="./vendor.html">Vendor</a>
                                    <a class="dropdown-item" href="./user.html">Customer</a>
                                    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
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
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Upgrade Courier</h4>
                                </div>
                                <div class="card-body">
                                    <form action method="POST"> 
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input class="form-control" id="inputFirstname" name="firstname" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input class="form-control" id="inputLastname" name="lastName" type="text" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Id Type</label>
                                                    <input class="form-control" id="idtp" name="idType" type="text" required>
                                                </div> 
                                            </div>
                                            
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Vehicle Type</label>
                                                    <input class="form-control" id="vehitype" name="vehicleType" type="text" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input class="form-control" id="inputAddress" name="address" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Id Number</label>
                                                    <input class="form-control" id="idn" name="idNum" type="number" value>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input class="form-control" id="inputPhone" name="phone" type="number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pl-1">
                                                <button class="btn btn-info btn-fill pull-right" id="butnCourier" type="submit">Add Courier</button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Upgrade Vendor</h4>
                                </div>
                                <div class="card-body">
                                    <form action method="POST"> 
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input class="form-control" id="inputFirstname" name="firstname" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input class="form-control" id="inputLastname" name="lastName" type="text" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Shop Name</label>
                                                    <input class="form-control" id="shopname" name="shopName"  type="text" required>
                                                </div> 
                                            </div>
                                            
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>ID Type</label>
                                                    <input class="form-control" id="idtype" name="idType" type="text" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Shop Address</label>
                                                    <input class="form-control" id="shopAdd" name="shopAddress" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Id Number</label>
                                                    <input class="form-control" id="idnum" name="idNum" type="number" value>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input class="form-control" id="inputPhone" name="phone" type="number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pl-1">
                                                <button class="btn btn-info btn-fill pull-right" id="butnVendor" type="submit">Add Vendor</button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>

                            </div>
                            </div>
                            </div>
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
                                    Category
                                </a>
                            </li>
                            <li>
                                <a href="./user.html">
                                    User
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    About
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