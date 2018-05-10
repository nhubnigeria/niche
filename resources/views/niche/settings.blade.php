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
                    <a class="navbar-brand" href="#pablo"> Vendor </a>
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
                                    <span class="no-icon">Category</span>
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
                                <a class="nav-link" href="#pablo">
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
                        <div class="container">
            <h1>products</h1>
            <hr>
            <form action="">
                <div class="row">
                        <div class="col-md-6">
                <div class="form-group">
                    <label for="product name">Product Name</label>
                        <input class="form-control" id="prodName" name="itemsName" type="text" required>
                        </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
            <label for="shop name">Shop Name</label>
            <input class="form-control" id="shop" name="shopName" type="text" required>
            </div>
            </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="Price">Price</label>
                    <input class="form-control" id="Aprice" name="price" type="number">
                    </div>
                    </div>
                        <div class="col-md-6">
                        <div class="form-group">
                        <label for="Number Available">Number Available</label>
                        <input class="form-control" id="numAvail" name="numberAvail" type="number" required>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                <label for="Shop Location">Shop Location</label>
                <input class="form-control" id="shopLoc" name="shopLocation" type="text">
                </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="category">category</label>
                    <input class="form-control" id="cat" name="category" type="text" required>
                    </div>
                    </div>    
                </div>
                <div clas="row">
                <div class="col-md-12">
                    <form class="form-group" action>
                        <input name="file" id="photo" type="file" accept="image/*">
                    </form>
                </div>
                </div>
                    
                    <button class="btn btn-default" id="main-button" type="submit">Submit</button>
            </form>
            </div>

            </div>
            </div>
            </div>
            @include('layouts.footer')
        </div>
    </div>
@endsection