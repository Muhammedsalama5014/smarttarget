@extends('admin.inc.layout');
@section('main')
<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Other Plan Features Create</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html"><i data-feather="home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Other Plan Features</li>
                    <li class="breadcrumb-item active">
                      Other Plan Features Create
                    </li>
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
                                                          action="{{ url("dashboard/otherplansfeatures/update/$otherplanfeature->id") }}"
                                                          enctype="multipart/form-data">
                                                          @csrf
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Plan Feature Title</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Plan Feature Title"
                              name="title"
                              value="{{$otherplanfeature->title}}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Plan Feature Price</label>
                            <input
                              class="form-control"
                              type="number"
                              placeholder="Plan Feature Price"
                              name="price"
                              value="{{$otherplanfeature->price}}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Plan</label>
                            <select
                              class="form-select"
                              required=""
                              id="myselection"
                              name="other_plan_id"
                            >
                              <option selected="" disabled="" value="">
                                Choose...
                              </option>
                              @foreach($plans as $plan)
                                @if($otherplanfeature->other_plan_id == $plan->id)
                                  <option value="{{$plan->id}}" selected="">
                                    {{$plan->title}}
                                  </option>
                                @else
                                  <option value="{{$plan->id}}">
                                    {{$plan->title}}
                                  </option>
                                @endif
                              @endforeach
                            </select>
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