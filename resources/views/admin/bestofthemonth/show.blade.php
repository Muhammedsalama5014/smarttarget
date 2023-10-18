@extends('admin.inc.layout');
@section('main')
    <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Best of the month</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#"> <i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Best of the month</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid user-card">
            <div class="row">
              <div class="col-md-12 project-list">
                <div class="card">
                  <div class="row">
                    <div class="col-md-6 p-0"></div>
                    <div class="col-md-6 p-0">
                      <div class="form-group mb-0 me-0"></div>
                      <a class="btn btn-primary" href="{{ url('/dashboard/bestofthemonth/create') }}">
                        <i data-feather="plus-square"> </i>Create New Service</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-12 xl-100">
                <div class="row">
                  @foreach($bests as $best)
                    <div class="col-xl-12 col-sm-6">
                        <div class="card">
                        <div class="blog-box blog-list row">
                            <div class="col-xl-5 col-12">
                            <img
                                class="img-fluid sm-100-w"
                                src="{{ asset("uploads/$best->image1") }}"
                            />
                            </div>
                            <div class="col-xl-7 col-12">
                            <div class="blog-details">
                                <div class="blog-date">{{ \Carbon\Carbon::parse($best->created_at)->format('d M, Y') }}</div>
                                <a href="#"> <h4>{{ $best->month_name }}</h4></a>

                                <hr />
                                <div>
                                    <a href="{{ url("dashboard/bestofthemonth/edit/$best->id") }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ url("dashboard/bestofthemonth/delete/$best->id") }}" class="btn btn-danger">Delete</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
