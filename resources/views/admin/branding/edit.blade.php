@extends('admin.inc.layout');
@section('main')
<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Branding Create</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html"><i data-feather="home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Branding</li>
                    <li class="breadcrumb-item active">Branding Create</li>
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
                                                          action="{{ url("dashboard/brandings/update/$branding->id") }}"
                                                          enctype="multipart/form-data">
                                                          @csrf
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Branding Main Image</label>
                            <input class="form-control" type="file" name="main_image"/>
                             <input class="form-control" type="text" name="main_image_title" placeholder="image title" value="{{$branding->main_image_title}}">
                            <input class="form-control" type="text" name="main_image_desc" placeholder="image description" value="{{$branding->main_image_desc}}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Branding Title</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Branding Title"
                              name="title"
                              value="{{$branding->title}}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Branding Categories</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Branding Categories"
                              name="categories"
                              value="{{$branding->categories}}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3">
                          <label class="form-label" for="validationTextarea"
                            > Short Description</label
                          >
                          <textarea
                            class="form-control"
                            id="validationTextarea"
                            placeholder="Required example textarea"
                            required=""
                            name="s_description"
                          >
                          {{$branding->s_description}}
                        </textarea>
                          <div class="invalid-feedback">
                            Please enter a message in the textarea.
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="mb-3">
                          <label class="form-label" for="default"
                            >Long Description</label
                          >
                          <textarea
                            class="form-control"
                            id="default"
                            placeholder="Required example textarea"
                            required=""
                            name="l_description"
                          >
                            {{$branding->l_description}}
  
                        </textarea>
                          <div class="invalid-feedback">
                            Please enter a message in the textarea.
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Branding Image one</label>
                            <input class="form-control" type="file" name="image1" />
                             <input class="form-control" type="text" name="image1_title" placeholder="image title" value="{{$branding->image1_title}}">
                            <input class="form-control" type="text" name="image1_desc" placeholder="image description" value="{{$branding->image1_desc}}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Branding Image two</label>
                            <input class="form-control" type="file" name="image2" />
                            <input class="form-control" type="text" name="image2_title" placeholder="image title" value="{{$branding->image2_title}}">
                            <input class="form-control" type="text" name="image2_desc" placeholder="image description" value="{{$branding->image2_desc}}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Branding Image three</label>
                            <input class="form-control" type="file" name="image3" />
                            <input class="form-control" type="text" name="image3_title" placeholder="image title" value="{{$branding->image3_title}}">
                            <input class="form-control" type="text" name="image3_desc" placeholder="image description" value="{{$branding->image3_desc}}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Branding Image four</label>
                            <input class="form-control" type="file" name="image4" />
                            <input class="form-control" type="text" name="image4_title" placeholder="image title" value="{{$branding->image4_title}}">
                            <input class="form-control" type="text" name="image4_desc" placeholder="image description" value="{{$branding->image4_desc}}">
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