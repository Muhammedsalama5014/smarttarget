@extends('admin.inc.layout');
@section('main')
    <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Service Create</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html"><i data-feather="home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Service</li>
                    <li class="breadcrumb-item active">Service Create</li>
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
                                                          action="{{ url('dashboard/servics/store') }}"
                                                          enctype="multipart/form-data">
                                                          @csrf
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Service Icon</label>
                            <input class="form-control" type="file" name="icon"/>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Service Title</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Service Title" name="title"
                            />
                          </div>
                        </div>
                      </div>
                        <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Service Title URL</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Service Title URL" name="service_title_url"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Service Sub Title</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Service Sub Title" name="sub_title"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3">
                          <label class="form-label" for="validationTextarea"
                            >Service Short Description</label
                          >
                          <textarea
                            class="form-control"
                            id="validationTextarea"
                            placeholder="Required example textarea"
                            required=""
                            name="s_description"
                          ></textarea>
                          <div class="invalid-feedback">
                            Please enter a message in the textarea.
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Service main Image</label>
                            <input class="form-control" type="file" name="main_img"/>
                             <input class="form-control" type="text" name="main_img_title" placeholder="image title">
                            <input class="form-control" type="text" name="main_img_desc" placeholder="image descritption ">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="mb-3">
                          <label class="form-label" for="default"
                            >Service Long Description</label
                          >
                          <textarea
                            class="form-control"
                            id="default"
                            placeholder="Required example textarea"
                            required=""
                            name="l_description"
                          ></textarea>
                          <div class="invalid-feedback">
                            Please enter a message in the textarea.
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Service Image One</label>
                            <input class="form-control" type="file" name="end_img1"/>
                            <input class="form-control" type="text" name="end_img1_title" placeholder="image title">
                            <input class="form-control" type="text" name="end_img1_desc" placeholder="image descritption ">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Service Image Two</label>
                            <input class="form-control" type="file" name="end_img2"/>
                              <input class="form-control" type="text" name="end_img2_title" placeholder="image title">
                            <input class="form-control" type="text" name="end_img2_desc" placeholder="image descritption ">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Service Image Three</label>
                            <input class="form-control" type="file" name="end_img3"/>
                              <input class="form-control" type="text" name="end_img3_title" placeholder="image title">
                            <input class="form-control" type="text" name="end_img3_desc" placeholder="image descritption ">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Service Image Four</label>
                            <input class="form-control" type="file" name="end_img4"/>
                            <input class="form-control" type="text" name="end_img4_title" placeholder="image title">
                            <input class="form-control" type="text" name="end_img4_desc" placeholder="image descritption ">
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