        <!-- Navbar -->
        <nav class=" navbar navbar-expand navbar-white navbar-light shadow-sm bg-body rounded fixed-top"
            style="background: #ddd;">
            <!-- Left navbar links -->
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        {{-- <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a> --}}
                        <h3 class="font-weight-bold">Galery Foto</h3>
                    </li>
                    {{-- <li class="nav-item d-none d-sm-inline-block">
                        <a href="../../index3.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Contact</a>
                    </li> --}}
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Navbar Search -->

                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link h5 mt-1" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-1x"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                        class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            {{ Auth::user()->name }}
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fa fa-edit"></i></span>
                                        </h3>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">Log Out</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link h5 mt-1" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-1x"></i>
                            <span class="badge badge-warning navbar-badge">15</span>   
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">Edit User</a>
                        </div>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                            role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->
