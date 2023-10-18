@extends('admin.inc.layout');
@section('main')
    <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Teams</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html"> <i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Teams</li>
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
                      <a class="btn btn-primary" href="{{ url("/dashboard/team/create") }}">
                        <i data-feather="plus-square"> </i>Create New Team</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-12 xl-100">
                <div class="row">
                  @foreach ($teams as $team)
                     <div class="col-xl-12 col-sm-6">
                        <div class="card">
                        <div class="blog-box blog-list row">
                            <div class="col-xl-5 col-12">
                            <img
                                class="img-fluid sm-100-w"
                                src="{{ asset("uploads/$team->img") }}"
                                alt=""
                            />
                            </div>
                            <div class="col-xl-7 col-12">
                            <div class="blog-details">
                                <div class="blog-date">{{ $team->created_at }}</div>
                                <a href="#"> <h4>{{ $team->name }}</h4></a>
                                <div class="blog-bottom-content">
                                <ul class="blog-social">
                                    <li>{{ $team->position }}</li>
                                    <li>{{ $team->description }}</li>
                                </ul>
                                <hr />
                                    <div>
                                        <a href="{{ url("dashboard/team/edit/$team->id") }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ url("dashboard/team/delete/$team->id") }}" class="btn btn-danger">Delete</a>
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