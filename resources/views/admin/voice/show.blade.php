@extends('admin.inc.layout');
@section('main')
<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>VoiceOver</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html"> <i data-feather="home"></i></a>
                    </li>
                    <li class="breadcrumb-item active">VoiceOver</li>
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
                      <a class="btn btn-primary" href="{{ url("/dashboard/voices/create") }}">
                        <i data-feather="plus-square"> </i>Create New
                        VoiceOver</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-12 xl-100">
                <div class="row">
                  @foreach($voices as $voice)
                  <div class="col-xl-4 col-sm-6">
                    <div style="padding: 20px" class="card">
                      <div class="blog-box blog-list row">
                        <div class="col-xl-12 col-12">
                          <audio src="{{ asset("uploads/$voice->audio") }}" controls></audio>
                                <div>
                                    <a href="{{ url("dashboard/voices/edit/$voice->id") }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ url("dashboard/voices/delete/$voice->id") }}" class="btn btn-danger">Delete</a>
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