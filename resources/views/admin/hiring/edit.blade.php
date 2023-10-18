@extends('admin.inc.layout');
@section('main')
    <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Jop Edit</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html"><i data-feather="home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Jop</li>
                    <li class="breadcrumb-item active">Jop CreEditate</li>
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
                    <form class="form theme-form projectcreate" method="post"
                                                          action="{{ url("dashboard/hirings/update/$hiring->id") }}"
                                                          enctype="multipart/form-data">
                                                          @csrf
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Jop Image</label>
                            <input class="form-control" type="file" name="img"/>
                            <input class="form-control" type="text" name="img_title" placeholder="image title" value="{{ $hiring->img_title }}">
                            <input class="form-control" type="text" name="img_desc" placeholder="image descritption " value="{{ $hiring->img_desc }}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Jop Title</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Jop Title" name="title" value="{{ $hiring->title }}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3">
                          <label class="form-label" for="default"
                            >Jop Long Description</label
                          >
                          <textarea
                            class="form-control"
                            id="default"
                            placeholder="Required example textarea"
                            required=""
                            name="description"
                            
                          >{{ $hiring->description }}</textarea>
                          <div class="invalid-feedback">
                            Please enter a message in the textarea.
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Jop Type</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Jop Title"
                              name="type"
                              value="{{ $hiring->type }}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Jop Location</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Jop Title"
                              name="location"
                              value="{{ $hiring->location }}"
                            />
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