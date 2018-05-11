@extends('oldlayouts.main')
@section('content')
    <div id="id01" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <a href="#" class="closebtn">×</a>
                <h3>Sign Up</h3>
                <div class="fields">
                    <img src="{{ asset('assets/img/email.png') }}" alt="">
                </div>
                <div class="fields">
                    <img src="{{ asset('assets/img/lock.png') }}" alt="">
                    <input type="password" id="InputPassword" placeholder="Password">
                    
                </div>

                <p>By signing up, you agree to our Terms of Service and Privacy Policy.</p>
                <input class="modSign" id="buttonSignup" type="submit" value="SIGN UP">
                <hr>
                <h4>Already Have an Account?</h4>
                <a id="toLogIn" href="#id02">LOG IN</a>
            </div>

        </div>
    </div>
    <div id="id02" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <a href="#" class="closebtn">×</a>
                <h3>Log In</h3>
                {{Form::open(['route' => 'perform_login', 'method' => 'POST'])}}
                <div class="fields">
                    <img src="{{ asset('assets/img/email.png') }}" alt="">
                    <input type="email"name="email" id="Email" placeholder="Email Address">
                </div>
                <div class="fields">
                    <img src="{{ asset('assets/img/email.png') }}" alt="">
                    <input type="password" name="password" id="Password" placeholder="Password">
                </div>
                <p><a id="forgotPass" href="#id03">Forgot password? Click here</a>.</p>
                <input class="modSign" type="submit" value="LOG IN">
                {{Form::close()}}
                <hr>
                <h4>New to Niche?</h4>
                <a id="toLogIn" href="#id01">SIGN UP</a>
            </div>

        </div>
    </div>
    <div id="id03" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <a href="#" class="closebtn">×</a>
                <h3>Recover Password</h3>
                <div class="fields">
                    <img src="{{ asset('assets/img/email.png') }}" alt="">
                    <input type="email" placeholder="Email Address">
                </div>
                <p>Enter the Email Address with which you registered and we will send you a recovery mail.</p>
                <input class="modSign" type="submit" value="RECOVER PASSWORD">
                <hr>
                <h4>Back to Log In?</h4>
                <a id="toLogIn" href="#id02">LOG IN</a>
            </div>

        </div>
    </div>
    <div id="id04" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <a href="#" class="closebtn">×</a>
                <h3>Become a Vendor</h3>
                <div class="fields">
                    <img src="{{ asset('assets/img/user.png') }}" alt="">
                    <input type="text" placeholder="Shop Address" id="inputAddress" name="shopAddress">
                </div>
                <div class="fields">
                    <img src="{{ asset('assets/img/user.png') }}" alt="">
                    <input type="text" placeholder="Shop Name" id="inputShop" name="shopName">
                </div>
                <div class="fields">
                    <img src="{{ asset('assets/img/email.png') }}" alt="">
                    <input type="text" placeholder="Id Type" id="inputType" name="idType">
                </div>
                <div class="fields">
                    <img src="{{ asset('assets/img/log.png') }}" alt="">
                    <input type="number" placeholder="Id Number" id="inputNum" name="idNum">
                </div>
                <p>By joining now, you agree to our Terms of Service and Privacy Policy.</p>
                <input class="modSign" id="mVendor" type="submit" value="JOIN Now">
                <hr>
                <h4>Enjoy Our Services</h4>
                <!--<a id="toLogIn" href="./dashboard.html">Dashboard</a>-->
            </div>

        </div>
    </div>

    <header>
        <nav>
            <img src="{{ asset('assets/img/logo-black.png') }}" alt="">
            <ul>
                <li><a id="login" href="#id02">LOG IN</a></li>
                <li><a id="signup" href="#id01">SIGN UP</a></li>
            </ul>
        </nav>
        <div id="header-contents">
            <h2 id="Heading">We Deliver<br> Anything Anywhere<br> Anytime</h2>
            <div id="searchBar">
                <input id="search" type="text" Placeholder="Delivery Locations"><input id="searchbtn" type="submit" value="SEARCH">
            </div>
        </div>
    </header>


    <section id="flex-section1">
        <div id="left">
            <div class="holder">
                <h3>
                    Become a<br> Vendor
                </h3>
                <p>
                    Join our large <br> network of vendors. <br> Sell &amp; Make Profit Easily
                </p>
                <a class="blackButton" id="vendor" href="#id04">JOIN NOW</a>
            </div>

        </div>
        <div id="bg-image1"></div>
    </section>
    <section id="flex-section2">
        <div id="imgbg"></div>
        <div>
            <div class="right">
                <h3>
                    Download the <br> Niche App
                </h3>
                <p>
                    Unlock the easiest way to get <br> anything delivered anywhere <br> and fast.
                </p>
                <a class="blackButton2" href=""><img class="icon" src="{{ asset('assets/img/play-store.png') }}" alt="">PLAY STORE</a>
                <a class="blackButton2" href=""><img class="icon" src="{{ asset('assets/img/app-store.png') }}" alt="">APP STORE</a>
            </div>
        </div>
    </section>
    <section id="flex-section3">
        <div>
            <div class="holder">
                <h3>
                    Quality Service <br> straight to <br> your doorstep
                </h3>
                <p>
                    What are you waiting for
                </p>
                <a class="blueButton" href="">GET STARTED</a>
            </div>
        </div>
        <div id="sec3-right">
            <img id="shopimg" src="{{ asset('assets/img/shop.png') }}" alt="">
        </div>

    </section>
    // @include('oldlayouts.footer')
    @endsection
    
    
        
