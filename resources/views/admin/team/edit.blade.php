@extends('admin.inc.layout');
@section('main')
    <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Team Create</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html"><i data-feather="home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Jop</li>
                    <li class="breadcrumb-item active">Team Create</li>
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
                                                          action="{{ url("dashboard/team/update/$team->id") }}"
                                                          enctype="multipart/form-data">
                                                          @csrf
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Team Image</label>
                            <input class="form-control" type="file" name="img"/>
                            <input class="form-control" type="text" name="img_title" placeholder="image title" value="{{ $team->img_title }}">
                            <input class="form-control" type="text" name="img_desc" placeholder="image descritption " value="{{ $team->img_desc }}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Video</label>
                            <input class="form-control" type="file" name="video"/>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Team Name</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Team Name"
                              name="name"
                              value="{{$team->name}}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Position</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Position"
                              name="position"
                              value="{{$team->position}}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Description</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Description"
                              name="description"
                              value="{{$team->description}}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>About</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Team Name"
                              name="about"
                              value="{{$team->about}}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Education</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Position"
                              name="education"
                              value="{{$team->education}}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Experiance</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Description"
                              name="experiance"
                              value="{{$team->experiance}}"
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