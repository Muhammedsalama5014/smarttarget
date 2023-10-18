@extends('admin.inc.layout');
@section('main')
    <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Website Blog Page English</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Admin</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            @extends('admin.inc.message')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="edit-profile">
                    <div class="row">
                        <div class="col-xl-12">
                            <form class="card" method="post" action="{{ url("/dashboard/sempage/update/1") }}" enctype="multipart/form-data">
                            @csrf
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">Header Section</h4>
                                    <div class="card-options"><a class="card-options-collapse" href="#"
                                                                 data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                                data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Background Image</label>
                                                <input class="form-control" type="file" name="bg_image">
                                                <input class="form-control" type="text" name="bg_image_title" placeholder="image title" value="{{$sem->bg_image_title}}">
                                                    <input class="form-control" type="text" name="bg_image_desc" placeholder="image description" value="{{$sem->bg_image_desc}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Section Title</label>
                                                <input class="form-control" type="text" name="title" value="{{ $sem->title }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Section Description</label>
                                                <input class="form-control" type="text" name="description" value="{{ $sem->description }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">Update Section</button>
                                </div>
                            </form>
                            <!-- Container-fluid Ends-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection