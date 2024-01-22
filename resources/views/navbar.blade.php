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
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="javacsript:;" type="button" class="nav-link" data-toggle="modal"
                            data-target="#modal-default">Upload Image <span> </span><i class="fas fa-upload"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Foto</a>
                    </li>
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
                                        <h3 class="dropdown-item-title mt-3">
                                            {{ Auth::user()->name }}
                                            <span class="float-right text-sm text-danger"><i
                                                    class="fa fa-edit"></i></span>
                                        </h3>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ url('logout') }}" class="dropdown-item dropdown-footer">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Upload Image</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('galery') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="judul" placeholder="Judul">
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" cols="10" rows="6"></textarea>

                            </div>
                            <div class="form-group">
                                <input type="file" name="foto" id="uploadImage">
                            </div>
                            <div class="form-group">
                                <img id="previewImage" style="max-width: 100%; max-height: 200px;" />
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- /.navbar -->
