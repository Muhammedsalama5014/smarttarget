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
                    <form class="form theme-form projectcreate" method="post" action="{{ url("/dashboard/bestofthemonth/store") }}" enctype="multipart/form-data">
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

                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Image One</label>
                            <input class="form-control" type="file" name="image1"/>
                             <input class="form-control" type="text" name="image1_title" placeholder="image title" >
                            <input class="form-control" type="text" name="image1_desc" placeholder="image descritption " >
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Image Two</label>
                            <input class="form-control" type="file" name="image2"/>
                              <input class="form-control" type="text" name="image2_title" placeholder="image title" >
                            <input class="form-control" type="text" name="image2_desc" placeholder="image descritption " >
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Image Three</label>
                            <input class="form-control" type="file" name="image3"/>
                            <input class="form-control" type="text" name="image3_title" placeholder="image title" >
                            <input class="form-control" type="text" name="image3_desc" placeholder="image descritption ">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Image Four</label>
                            <input class="form-control" type="file" name="image4"/>
                            <input class="form-control" type="text" name="image4_title" placeholder="image title" >
                            <input class="form-control" type="text" name="image4_desc" placeholder="image descritption ">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Image Five</label>
                            <input class="form-control" type="file" name="image5"/>
                            <input class="form-control" type="text" name="image5_title" placeholder="image title" >
                            <input class="form-control" type="text" name="image5_desc" placeholder="image descritption ">
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
