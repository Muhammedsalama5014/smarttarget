@extends('admin.inc.layout');
@section('main')
<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>websites Create</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html"><i data-feather="home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">websites</li>
                    <li class="breadcrumb-item active">websites Create</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <form class="form theme-form projectcreate" method="post"
                                                          action="{{ url('dashboard/websites/store') }}"
                                                          enctype="multipart/form-data">
                                                          @csrf
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Type</label>
                            <select
                              class="form-select"
                              required=""
                              id="myselection"
                              name="type"
                            >
                              <option selected="" disabled="" value="">
                                
                              </option>
                              <option value="One">Website</option>
                              <option value="Two">Mobile Application</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>website main Image</label>
                            <input class="form-control" type="file" name="main_image" />
                             <input class="form-control" type="text" name="main_image_title" placeholder="image title" >
                            <input class="form-control" type="text" name="main_image_desc" placeholder="image description" >
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>website Title</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="website Title"
                              name="title"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3">
                          <label class="form-label" for="validationTextarea"
                            >website Short Description</label
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
                            <label>website Image One</label>
                            <input class="form-control" type="file" name="image1" />
                                <input class="form-control" type="text" name="image1_title" placeholder="image title" >
                            <input class="form-control" type="text" name="image1_desc" placeholder="image description">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>website Image One</label>
                            <input class="form-control" type="file" name="image2" />
                                <input class="form-control" type="text" name="image2_title" placeholder="image title" >
                            <input class="form-control" type="text" name="image2_desc" placeholder="image description">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>website Image One</label>
                            <input class="form-control" type="file" name="image3" />
                                <input class="form-control" type="text" name="image3_title" placeholder="image title" >
                            <input class="form-control" type="text" name="image3_desc" placeholder="image description">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Section One image</label>
                            <input class="form-control" type="file" name="sec1_image" />
                                <input class="form-control" type="text" name="sec1_image_title" placeholder="image title" >
                            <input class="form-control" type="text" name="sec1_image_desc" placeholder="image description">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Section One Title</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="website Title"
                              name="sec1_title"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3">
                          <label class="form-label" for="validationTextarea"
                            >Section One Description</label
                          >
                          <textarea
                            class="form-control"
                            id="validationTextarea"
                            placeholder="Required example textarea"
                            required=""
                            name="sec1_description"
                          ></textarea>
                          <div class="invalid-feedback">
                            Please enter a message in the textarea.
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Section Two image</label>
                            <input class="form-control" type="file" name="sec2_image" />
                             <input class="form-control" type="text" name="sec2_image_title" placeholder="image title" >
                            <input class="form-control" type="text" name="sec2_image_desc" placeholder="image description">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Section Two Title</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="website Title"
                              name="sec2_title"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3">
                          <label class="form-label" for="validationTextarea"
                            >Section Two Description</label
                          >
                          <textarea
                            class="form-control"
                            id="validationTextarea"
                            placeholder="Required example textarea"
                            required=""
                            name="sec2_description"
                          ></textarea>
                          <div class="invalid-feedback">
                            Please enter a message in the textarea.
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