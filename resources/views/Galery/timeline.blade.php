@extends('front')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Timeline</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Timeline</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Timelime example  -->
            <div class="row">
                <div class="col-md-12">
                    <!-- The time line -->
                    <div class="timeline">
                        <!-- timeline time label -->
                        {{-- <div class="time-label">
                            <span class="bg-red">10 Feb. 2014</span>
                        </div> --}}
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        @foreach ($galery as $foto)
                            <div>
                                <i class="fas fa-envelope bg-blue"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fas fa-calendar"></i>
                                        {{ $foto->created_at->diffForhumans() }} <br> {{ $foto->tanggal }}</span>
                                    <img class="mx-auto d-block py-5" src="{{ asset('image/' . $foto->foto) }}"
                                        alt="" height="600px">
                                    <h2 class="mx-5 font-weight-bold">{{ $foto->judul }}</h2>
                                    <div class="mx-5">
                                        {{ $foto->deskripsi }}
                                    </div>
                                    <div class="modal fade" id="edit{{ $foto->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Image</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ url('galery/' . $foto->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <input type="text" value="{{ $foto->judul }}"
                                                                class="form-control" name="judul" placeholder="Judul">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" cols="10" rows="6">{{ $foto->deskripsi }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="file" name="foto"
                                                                value="{{ url('image/' . $foto->foto) }}" id="Image">
                                                        </div>
                                                        <div class="form-group">
                                                            @if ($foto->foto)
                                                                <img src="{{ url('image/' . $foto->foto) }}" id="viewImage"
                                                                    style="max-width: 100%; max-height: 200px;" />
                                                            @else
                                                                <img id="viewImage"
                                                                    style="max-width: 100%; max-height: 200px;" />
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <div class="mx-5 py-3">
                                        <a href="javascript:;" type="button" data-toggle="modal"
                                            data-target="#edit{{ $foto->id }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ url('galery/' . $foto->id) }}"
                                            onclick=" return confirm('Apakah Yakin Untu Di Hapus???')"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div>
                            <i class="fas fa-clock bg-gray"></i>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.timeline -->

    </section>
    <!-- /.content -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#Image').change(function() {
                var input = this;
                var preview = $('#viewImage');

                var reader = new FileReader();
                reader.onload = function() {
                    preview.attr('src', reader.result);
                };

                if (input.files.length > 0) {
                    reader.readAsDataURL(input.files[0]);
                } else {
                    preview.attr('src', '');
                }
            });
        });
    </script>
@endsection
