@extends('admin.inc.layout');
@section('main')
<div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Blog Edit</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html"><i data-feather="home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">Blog</li>
                    <li class="breadcrumb-item active">Blog Edit</li>
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
                                                          action="{{ url("dashboard/blogs/update/$blog->id") }}"
                                                          enctype="multipart/form-data">
                                                          @csrf
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Blog Image</label>
                            <input class="form-control" type="file" name="image"/>
                              <input class="form-control" type="text" name="image_title" placeholder="image title" value="{{$blog->image_title}}">
                            <input class="form-control" type="text" name="image_desc" placeholder="image descritption " value="{{$blog->image_desc}}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Blog Title</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Blog Title" 
                              name="title"
                              value="{{$blog->title}}"
                            />
                          </div>
                        </div>
                      </div>
                         <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Blog Title URL</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Blog Title URL" 
                              name="blog_title_url"
                              value="{{$blog->blog_title_url}}"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3">
                          <label class="form-label" for="validationTextarea"
                            >Blog Short Description</label
                          >
                          <textarea
                            class="form-control"
                            id="validationTextarea"
                            placeholder="Required example textarea"
                            required=""
                            name="s_description"
                          >
                          {{$blog->s_description}}
                        </textarea>
                          <div class="invalid-feedback">
                            Please enter a message in the textarea.
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
                            name="l_description"
                          >
                          {{$blog->l_description}}
                        </textarea>
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