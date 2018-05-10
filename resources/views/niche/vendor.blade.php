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
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#" aria-expanded="false" aria-haspopup="true">
                                    <span class="no-icon">Category</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Courier</a>
                                    <a class="dropdown-item" href="#">Vendor</a>
                                    <a class="dropdown-item" href="#">Customer</a>
                                    <!-- <a class="dropdown-item" href="#">Something else here</a> -->
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
        <!-- <i class="fa fa-envelope icon"></i> -->
      <label for="email">Stock</label>
      <input class="form-control" name="email" type="text" required>
    </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
          <!-- <i class="fa fa-user icon"></i> -->
        <label for="name">Product Name</label>
              <input class="form-control" name="name" type="text" required>
            </div>
    </div>
      </div>
      <div class="row">
        <div class="col-md-6">
        <div class="form-group">
            <!-- <i class="fa fa-credit-card icon"></i> -->
             <label for="category">Quantity</label>
             <input class="form-control" name="category" type="number">
            </div>
            </div>
            <div class="col-md-6">
  <div class="form-group">
      <!-- <i class="fa fa-key icon"></i> -->
    <label for="pwd">Price:</label>
    <input class="form-control" name="pwd" type="number" required>
  </div>
</div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p><strong>Category</strong></p>
          <div class="radio">
              <label><input name="optradio" type="radio">Accessories</label>
            </div>
            <div class="radio">
              <label><input name="optradio" type="radio">Grocery</label>
            </div>
            <div class="radio">
              <label><input name="optradio" type="radio">Electronics</label>
            </div>
            <div class="radio">
                <label><input name="optradio" type="radio">Food</label>
              </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
    <div class="form-group">
            <label for="comment">Description</label>
         <textarea class="form-control" id="comment" rows="5"></textarea>
     </div>
     </div>
     </div>
     <div clas="row">
       <div class="col-md-12">
          <form class="form-group" action>
            <input id="photo" name="file" type="file" accept="image/*">
            <!--<input class="form-group" type="submit">-->
          </form>
       </div>
     </div>
    <button class="btn btn-default" id="main-button" type="submit">Submit</button>
  </form>
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
                            <a href="#">Niche</a>, 
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
   <script>
    document.getElementById("main-button").addEventListener("click", function(event){
    event.preventDefault();
    document.getElementById("main-button").innerHTML = "signing you in...";
    var formdata={
       file: document.getElementById("photo").value,
        // password: document.getElementById("InputPassword").value,
        
    }
    console.log(formdata);

    postData("https://niche-vendor.herokuapp.com/upload",formdata)
    .then(data => {
        console.log(data)
        // document.getElementById(main-button").innerHTML = "success";

        if(data.status == 200){
            alert("File uploaded successfully");
            window.location.replace("dashboard.html");
        } 
        else if(data.status >= 400){
            alert("Failed to Upload");
            document.getElementById("main-button").innerHTML = "try again";
        }
        // else if(data.status == 203){
        //     window.location.replace("courier.html");
        // }
        // else if(data.status == 200){
        //     window.location.replace("visitor.html");
        // }
        
        // else if(data.status >= 400){
        //    alert("Please check the provided data and try again");
        //     document.getElementById("main-button").innerHTML = "try again";
        
        // }
    })
    .catch(err =>{
        console.log(err);
        document.getElementById("main-button").innerHTML = "try again";
        
    }) 

    
});
function postData(url, data) {
  // Default options are marked with *
  return fetch(url, {
    body: JSON.stringify(data), // must match 'Content-Type' header
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, same-origin, *omit
    headers: {
      'user-agent': 'Mozilla/4.0 MDN Example',
      'content-type': 'application/json'
    },
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, cors, *same-origin
    redirect: 'follow', // *manual, follow, error
    referrer: 'no-referrer', // *client, no-referrer
  })
  .then(response => response.json()) // parses response to JSON
}

   </script>
</div></body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE" type="text/javascript"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>                              
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
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
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
                            <a href="http://www.creative-tim.com">Niche</a>, everything-anytime
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
@endsection   
  <script>
//     const API_URL = 'https://niche-vendor.herokuapp.com/files'
//     var history = document.getElementById("History");

// history.addEventListener("click" , function(event){
    
//     axios({
//         url : API_URL,
//         method : 'GET',
//         headers: {
//             'Content-type' : 'application/x-www-form-urlencoded'
//         }, 
//         data : formData
//     }).then (function(res){
//         console.log(res);
//         imgPreview.src = res.data.secure_url;

//     }).catch(function(err){
//         console.log(err);

//     })
// });
 //<script>

document.getElementById("History").addEventListener("click", function(event){
    event.preventDefault();
    document.getElementById("History").innerHTML = "signing you in...";
    // var formdata={
    //     email: document.getElementById("InputEmail").value,
    //     password: document.getElementById("InputPassword").value,
        
    // }
    // console.log(formdata);

    postData("https://niche-vendor.herokuapp.com/login")
    .then(data => {
        console.log(data)
        document.getElementById("buttonSignin").innerHTML = "success";

        if(data.status == 200){
            window.location.replace("costmer.html");
        } 
        else if(data.status == 202){
            window.location.replace("vendor.html");
        }
        else if(data.status == 203){
            window.location.replace("courier.html");
        }
        else if(data.status == 200){
            window.location.replace("visitor.html");
        }
        
        else if(data.status >= 400){
           alert("Please check the provided data and try again");
            document.getElementById("buttonSignin").innerHTML = "try again";
        
        }
    })
    .catch(err =>{
        console.log(err);
        document.getElementById("buttonSignin").innerHTML = "try again";
        
    }) 

    
});
function postData(url, data) {
  // Default options are marked with *
  return fetch(url, {
    body: JSON.stringify(data), // must match 'Content-Type' header
    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
    credentials: 'same-origin', // include, same-origin, *omit
    headers: {
      'user-agent': 'Mozilla/4.0 MDN Example',
      'content-type': 'application/json'
    },
    method: 'POST', // *GET, POST, PUT, DELETE, etc.
    mode: 'cors', // no-cors, cors, *same-origin
    redirect: 'follow', // *manual, follow, error
    referrer: 'no-referrer', // *client, no-referrer
  })
  .then(response => response.json()) // parses response to JSON
}

    </script>

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
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        // demo.showNotification();

    });
</script>
</body>
</html>