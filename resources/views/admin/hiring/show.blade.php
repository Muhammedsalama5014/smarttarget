@extends('admin.inc.layout');
@section('main')
    <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Jops</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html"> <i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Jops</li>
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
                      <a class="btn btn-primary" href="{{ url("/dashboard/hirings/create") }}">
                        <i data-feather="plus-square"> </i>Create New Jop</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-12 xl-100">
                <div class="row">
                  @foreach ($hirings as $hiring)
                    <div class="col-xl-12 col-sm-6">
                    <div class="card">
                      <div class="blog-box blog-list row">
                        <div class="col-xl-5 col-12">
                          <img
                            class="img-fluid sm-100-w"
                            src="{{ asset("uploads/$hiring->img") }}"
                            alt=""
                          />
                        </div>
                        <div class="col-xl-7 col-12">
                          <div class="blog-details">
                            <div class="blog-date">{{ \Carbon\Carbon::parse($hiring->created_at)->format('d M, Y') }}</div>
                            <a href="#"> <h4>{{ $hiring->title }}</h4></a>
                            <div class="blog-bottom-content">
                              <ul class="blog-social">
                                <li>{{ $hiring->type }}</li>
                                <li>{{ $hiring->location }}</li>
                              </ul>
                              <hr />
                              <div>
                                    <a href="{{ url("dashboard/hirings/edit/$hiring->id") }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ url("dashboard/hirings/delete/$hiring->id") }}" class="btn btn-danger">Delete</a>
                                    <a href="{{ url("dashboard/hirings/request/$hiring->id") }}" class="btn btn-primary">Jop Requests</a>
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