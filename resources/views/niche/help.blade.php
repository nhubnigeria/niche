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
                    <a class="navbar-brand" href="#pablo">Help Centre</a>
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
                                    <a class="dropdown-item" href="./vendor/html">Vendor</a>
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
                        <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h2 class="card-title">Contact Us</h2>
                                            <p>Feel Free to Contact Us</p>
                                        </div>
                                        <div class="card-body">
                                            <form> 
                                                    <div class="col-md-12 pr-1">
                                                        <div class="form-group">
                                                            <label> Name</label>
                                                            <input type="text" class="form-control" name="name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 pl-1">
                                                            <div class="form-group">
                                                                    <label for="exampleInputEmail1">Email address</label>
                                                                    <input type="email" class="form-control" id="inputEmail" name="email" required>
                                                                </div>
                                                    </div>
                                                    <div class="col-md-12 pr-1">
                                                            <div class="form-group">
                                                                    <label for="subject">
                                                                        Subject</label>
                                                                    <select id="subject" name="subject" class="form-control" required="required">
                                                                        <option value="na" selected="">Choose One:</option>
                                                                        <option value="service">General Customer Service</option>
                                                                        <option value="suggestions">Suggestions</option>
                                                                        <option value="product">Product Support</option>
                                                                    </select>
                                                                </div>
                                                    </div>
                                                    <div class="col-md-12 pr-1">
                                                            <div class="form-group">
                                                            <label for="name">
                                                                Message</label>
                                                            <textarea  class="form-control" rows="9" cols="25" required="required"
                                                                placeholder="Message"></textarea>
                                                        </div>
                                                    </div>
                                                <button type="submit" class="btn btn-info btn-fill pull-right" >Send Message</button>
                                                <div class="clearfix"></div>
                                            </form>
                                </div>
                        </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-body">
                                <form>
                                <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
                                <address>
                                    <strong>Niche, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">
                                        P:</abbr>
                                    (123) 456-7890
                                </address>
                                <address>
                                    <strong>Full Name</strong><br>
                                    <a href="mailto:#">first.last@example.com</a>
                                </address>
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
                            <a href="./index.html">Niche</a>,everything-anytime
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    @endsection
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>