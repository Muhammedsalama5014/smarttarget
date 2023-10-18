@extends('admin.inc.layout');
@section('main')
    <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Website About Page English</h3>
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
                        <form method="post" action="{{ url("/dashboard/aboutpage/update/1") }}" enctype="multipart/form-data">
                        @csrf
                            <div class="col-xl-12">
                                <div class="card">
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
                                                    <input class="form-control" type="text" name="bg_image_title" placeholder="image title" value="{{$about->bg_image_title}}">
                                                    <input class="form-control" type="text" name="bg_image_desc" placeholder="image description" value="{{$about->bg_image_desc}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Section Title</label>
                                                    <input class="form-control" type="text"  name="h_title" value="{{$about->h_title}}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Section Description</label>
                                                    <input class="form-control" type="text"  name="h_desc" value="{{$about->h_desc}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Container-fluid Ends-->
                            </div>

                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <h4 class="card-title mb-0">YOUR 1ST GUIDE Section</h4>
                                        <div class="card-options"><a class="card-options-collapse" href="#"
                                                                    data-bs-toggle="card-collapse"><i
                                                class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                                    data-bs-toggle="card-remove"><i
                                                class="fe fe-x"></i></a></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Section Title</label>
                                                    <input class="form-control" type="text"  name="guide_title" value="{{$about->guide_title}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationTextarea">Section Description Part One</label>
                                                <textarea class="form-control" id="validationTextarea"
                                                        name="guide_desc1">{{ $about->guide_desc1 }}</textarea>
                                                <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label class="form-label" for="validationTextarea">Section Description Part Two</label>
                                                <textarea class="form-control" id="validationTextarea"
                                                        name="guide_desc2">{{ $about->guide_desc2 }}</textarea>
                                                <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Image</label>
                                                    <input class="form-control" type="file" name="guide_image">
                                                    <input class="form-control" type="text" name="guide_image_title" placeholder="image title" value="{{$about->guide_image_title}}">
                                                    <input class="form-control" type="text" name="guide_image_desc" placeholder="image description" value="{{$about->guide_image_desc}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Portfolio pdf</label>
                                                    <input class="form-control" type="file" name="profile">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Container-fluid Ends-->
                            </div>

                            <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">About Smart Target Section</h4>
                                    <div class="card-options"><a class="card-options-collapse" href="#"
                                                                 data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                                data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Section Title</label>
                                                <input class="form-control" type="text" name="about_title" value="{{ $about->about_title }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Section Description Part One</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      name="about_desc1">{{ $about->about_desc1 }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Section Description Part Two</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      name="about_desc2">{{ $about->about_desc2 }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Vission</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      name="vision">{{ $about->vision }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Mission</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      name="mission">{{ $about->mission }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Image One</label>
                                                <input class="form-control" type="file" name="about_image1">
                                                <input class="form-control" type="text" name="about_image1_title" placeholder="image title" value="{{$about->about_image1_title}}">
                                                    <input class="form-control" type="text" name="about_image1_desc" placeholder="image description" value="{{$about->about_image1_desc}}">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Image Two</label>
                                                <input class="form-control" type="file" name="about_image2">
                                                <input class="form-control" type="text" name="about_image2_title" placeholder="image title" value="{{$about->about_image2_title}}">
                                                    <input class="form-control" type="text" name="about_image2_desc" placeholder="image description" value="{{$about->about_image2_desc}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">Update Section</button>
                                </div>
                            </div>
                            <!-- Container-fluid Ends-->
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection