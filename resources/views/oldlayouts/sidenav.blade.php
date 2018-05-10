<div class="sidebar" data-image="{{ asset ('assets/assets/img/guy.jpg') }}">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <div class="simple-text">
                        <img src="{{ asset ('../assets/img/logo-white.png') }}">
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('index') }}">
                                <i class="nc-icon nc-single-02"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('user') }}">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Edit Profile</p>
                        </a>
                    </li>
                     <li>
                        <a class="nav-link" href="{{ route ('add') }}">
                            <i class="nc-icon nc-headphones-2"></i>
                            <p>Upgrade User</p>
                        </a>
                    </li>
                     <li>
                        <a class="nav-link" href="{{ route('settings') }}">
                            <i class="nc-icon nc-settings-gear-64"></i>
                            <p>Products</p>
                        </a>
                    </li> 
                   
                    <li>
                        <a class="nav-link" id="History">
                            <i class="fa fa-shopping-cart"></i> Display
                        </a>
                    </li>

                </ul>
            </div>
        </div>