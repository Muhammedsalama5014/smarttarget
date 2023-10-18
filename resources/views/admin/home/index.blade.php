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
                        <form method="post" action="{{ url("/dashboard/homepage/update/1") }}" enctype="multipart/form-data">
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
                                        <div class="col-sm-12 col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Background Video</label>
                                                <input class="form-control" type="file" name="header_video">
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
                                    <h4 class="card-title mb-0">Who We Are Section</h4>
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
                                                <input  class="form-control" type="text" name="who_title" value="{{ $home->who_title }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Section Description Part One</label>
                                            <textarea id="text"  class="form-control"  required="" name="who_description1">{{ $home->who_description1 }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Section Description Part Two</label>
                                            <textarea class="form-control" id="text"
                                                      name="who_description2">{{ $home->who_description2 }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Image One</label>
                                                <input class="form-control" type="file" name="who_img1">
                                                 <input class="form-control" type="text" name="who_img1_title" placeholder="image title" value="{{ $home->who_img1_title }}">
                                                  <input class="form-control" type="text" name="who_img1_desc" placeholder="image descritption " value="{{ $home->who_img1_desc }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Image Two</label>
                                                <input class="form-control" type="file" name="who_img2">
                                                <input class="form-control" type="text" name="who_img2_title" placeholder="image title" value="{{ $home->who_img2_title }}">
                                                  <input class="form-control" type="text" name="who_img2_desc" placeholder="image descritption " value="{{ $home->who_img2_desc }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-4 col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Image Three</label>
                                                <input class="form-control" type="file" name="who_img3">
                                                <input class="form-control" type="text" name="who_img3_title" placeholder="image title" value="{{ $home->who_img3_title }}">
                                                  <input class="form-control" type="text" name="who_img3_desc" placeholder="image descritption " value="{{ $home->who_img3_desc }}">
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
                                                <input class="form-control" type="text" name="about_title" value="{{ $home->about_title }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Section Description Part One</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      name="about_description1">{{ $home->about_description1 }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Section Description Part Two</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      name="about_description2">{{ $home->about_description2 }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Mission</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      name="vission">{{ $home->vission }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <label class="form-label" for="validationTextarea">Vission</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                      name="mission">{{ $home->mission }}</textarea>
                                            <div class="invalid-feedback">Please enter a message in the textarea.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Image One</label>
                                                <input class="form-control" type="file" name="mission_img">
                                                <input class="form-control" type="text" name="mission_img_title" placeholder="image title" value="{{ $home->mission_img_title }}">
                                                  <input class="form-control" type="text" name="mission_img_desc" placeholder="image descritption " value="{{ $home->mission_img_desc }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Image Two</label>
                                                <input class="form-control" type="file" name="vission_img">
                                                   <input class="form-control" type="text" name="vission_img_title" placeholder="image title" value="{{ $home->vission_img_title }}">
                                                  <input class="form-control" type="text" name="vission_img_desc" placeholder="image descritption " value="{{ $home->vission_img_desc }}">
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

                        <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Fuel Your Brand Goals with With Us.</h5>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Budget</th>
                                        <th scope="col">Goals</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($goals as $index=>$goal)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>{{ $goal->name }}</td>
                                            <td>{{ $goal->email }}</td>
                                            <td>{{ $goal->phone }}</td>
                                            <td>{{ $goal->budget }}</td>
                                            <td>{{ $goal->goals }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
@endsection