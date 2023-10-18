@extends('admin.inc.layout');
@section('main')
<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Social Plan Features Create</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html"><i data-feather="home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Social Plan Features</li>
                    <li class="breadcrumb-item active">
                      Social Plan Features Create
                    </li>
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
                                                          action="{{ url('dashboard/addfeature/store') }}"
                                                          enctype="multipart/form-data">
                                                          @csrf
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Feature</label>
                            <select
                              class="form-select"
                              required=""
                              id="myselection"
                              name="social_plan_features"
                            >
                              <option selected="" disabled="" value="">
                                Choose...
                              </option>
                              @foreach($features as $feature)
                                  <option value="{{ $feature->id }},{{ $feature->title }}">{{ $feature->title }}</option>
                              @endforeach
                            </select>
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
                              name="social_plans"
                            >
                              <option selected="" disabled="" value="">
                                Choose...
                              </option>
                               @foreach($plans as $plan)
                                    <option value="{{ $plan->id }},{{ $plan->title }}">{{ $plan->title }}</option>
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

              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h5>Features</h5>
                  </div>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Plan</th>
                          <th scope="col">Feature</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($finals as $index=>$final)
                        <tr>
                          <th scope="row">{{$index+1}}</th>
                          <td>{{$final->social_plan_name}}</td>
                          <td>{{$final->social_plan_feature_name}}</td>
                          <td>
                            <a  href="{{ url("dashboard/addfeature/delete/$final->id") }}" type="button" class="btn btn-danger">
                              Delete
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
@endsection