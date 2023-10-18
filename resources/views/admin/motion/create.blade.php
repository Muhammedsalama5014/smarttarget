@extends('admin.inc.layout');
@section('main')
<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Motion Create</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html"><i data-feather="home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Motion</li>
                    <li class="breadcrumb-item active">Motion Create</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          @extends('admin.inc.message')
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <form class="form theme-form projectcreate" method="post" action="{{ url('dashboard/motions/store') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Motion Main image</label>
                            <input class="form-control" type="file" name="video5"/>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Motion Main Video</label>
                            <input class="form-control" type="file" name="video"/>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Motion Title</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Motion Title"
                              name="title"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Company Name</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Company Name"
                              name="company"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Motion Video One</label>
                            <input class="form-control" type="file" name="video1" />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Motion Image one</label>
                            <input class="form-control" type="file" name="video2"/>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3">
                          <label class="form-label" for="default"
                            >Blog Long Description</label
                          >
                          <textarea
                            class="form-control"
                            id="default"
                            placeholder="Required example textarea"
                            required=""
                            name="description"
                          ></textarea>
                          <div class="invalid-feedback">
                            Please enter a message in the textarea.
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Motion Motion image Two</label>
                            <input class="form-control" type="file" name="video3"/>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Motion Image two</label>
                            <input class="form-control" type="file" name="video4"/>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col">
                          <div class="text-end">
                            <button
                              type="submit"
                              class="btn btn-danger"
                              href="#"
                            >
                              Add
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
@endsection