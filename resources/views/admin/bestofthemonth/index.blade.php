@extends('admin.inc.layout');
@section('main')
<div class="page-body">
    @extends('admin.inc.message')
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div style="margin-top: 10px" class="card">
                  <div class="card-body">
                    <form class="form theme-form projectcreate" method="post" action="{{ url("/dashboard/bestofthemonth/update/1") }}" enctype="multipart/form-data">
                    @csrf
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Month name</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Month name"
                              name="month_name"
                              value="{{ $best->month_name }}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Image One</label>
                            <input class="form-control" type="file" name="image1"/>
                             <input class="form-control" type="text" name="image1_title" placeholder="image title" value="{{$best->image1_title}}">
                            <input class="form-control" type="text" name="image1_desc" placeholder="image descritption " value="{{$best->image1_desc}}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Image Two</label>
                            <input class="form-control" type="file" name="image2"/>
                              <input class="form-control" type="text" name="image2_title" placeholder="image title" value="{{$best->image2_title}}">
                            <input class="form-control" type="text" name="image2_desc" placeholder="image descritption " value="{{$best->image2_desc}}">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Image Three</label>
                            <input class="form-control" type="file" name="image3"/>
                            <input class="form-control" type="text" name="image3_title" placeholder="image title" value="{{$best->image3_title}}">
                            <input class="form-control" type="text" name="image3_desc" placeholder="image descritption " value="{{$best->image3_desc}}">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Image Four</label>
                            <input class="form-control" type="file" name="image4"/>
                            <input class="form-control" type="text" name="image4_title" placeholder="image title" value="{{$best->image4_title}}">
                            <input class="form-control" type="text" name="image4_desc" placeholder="image descritption " value="{{$best->image4_desc}}">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Image Five</label>
                            <input class="form-control" type="file" name="image5"/>
                            <input class="form-control" type="text" name="image5_title" placeholder="image title" value="{{$best->image5_title}}">
                            <input class="form-control" type="text" name="image5_desc" placeholder="image descritption " value="{{$best->image5_desc}}">
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