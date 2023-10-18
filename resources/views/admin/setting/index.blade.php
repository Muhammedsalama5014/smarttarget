@extends('admin.inc.layout');
@section('main')
    <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Website Home Page English</h3>
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
                        <form method="post" action="{{ url("/dashboard/setting/update/1") }}" enctype="multipart/form-data">
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
                                                <label class="form-label">Logo</label>
                                                <input class="form-control" type="file" name="logo">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Icon</label>
                                                <input class="form-control" type="file" name="icon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Container-fluid Ends-->
                        </div>

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Site Name</label>
                                                <input class="form-control" type="text" name="name" value="{{ $setting->name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Site Description</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                       required="" name="description">{{ $setting->description }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Site Keywords</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      name="keywords">{{ $setting->keywords }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Container-fluid Ends-->
                        </div>

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <input class="form-control" type="text" name="address" value="{{ $setting->address }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Footer Description</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      name="footer_description">{{ $setting->footer_description }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Phone number one</label>
                                                <input class="form-control" type="text" name="phone1" value="{{ $setting->phone1 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Phone number two</label>
                                                <input class="form-control" type="text" name="phone2" value="{{ $setting->phone2 }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" type="text" name="email" value="{{ $setting->email }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">facebook</label>
                                                <input class="form-control" type="text" name="facebook" value="{{ $setting->facebook }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">twitter</label>
                                                <input class="form-control" type="text" name="twitter" value="{{ $setting->twitter }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">instagram</label>
                                                <input class="form-control" type="text" name="instagram" value="{{ $setting->instagram }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">behance</label>
                                                <input class="form-control" type="text" name="behance" value="{{ $setting->behance }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">messanger</label>
                                                <input class="form-control" type="text" name="messanger" value="{{ $setting->messanger }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">whatsapp</label>
                                                <input class="form-control" type="text" name="whatsapp" value="{{ $setting->whatsapp }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">telegram</label>
                                                <input class="form-control" type="text" name="telegram" value="{{ $setting->telegram }}">
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