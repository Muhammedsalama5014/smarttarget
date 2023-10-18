
@extends('web.layout')
@section('title')
    {{$setting->description }}
@endsection

@section('body')
    <section class="hiringinner">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 item wow fadeInLeft" data-wow-duration="1s">
                    <div class="h-box">
                        <div class="photo"><img src="{{asset("uploads/$hiring->img")}}" alt="" title=""></div>
                        <div class="detels">
                            <h1 class="title">{{$hiring->title}}</h1>
                            <div class="w-100 mt-4"><span class="respons"> Responsibilities</span>
                                <ul class="list">
                                    <li>{{$hiring->description}}</li>

                                </ul>
                            </div>

                            <div class="jobtype">
                                <p class="textlight">Job Type: <span>{{$hiring->type}}</span></p>
                                <p class="textlight">Job Location: <span>{{$hiring->location}}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 item  wow fadeInRight" data-wow-duration="1s">
                    <form action="{{url("/hiring-request")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12 inpusrach">
                                <input class="form-control" name="hiringId" type="hidden" value="{{$hiring->id}}">
                            </div>
                            <div class="col-sm-12 inpusrach">
                                <input class="form-control" name="name" type="text" placeholder="" autocomplete="off" required>
                                <label class="floating-label">Name</label>
                            </div>
                            <div class="col-sm-12 inpusrach">
                                <input class="form-control" name="email" type="email" placeholder="" autocomplete="off" required>
                                <label class="floating-label">Email Address  </label>
                            </div>
                            <div class="col-sm-12 inpusrach">
                                <input class="form-control" name="phone" type="text" placeholder="" autocomplete="off" required>
                                <label class="floating-label">Phone Number </label>
                            </div>
                            <div class="col-sm-12 inpusrach">
                                <textarea class="form-control" name="cover" placeholder="" autocomplete="off" required></textarea>
                                <label class="floating-label">Cover Letter</label>
                            </div>
                            <div class="col-sm-12 inpusrach">
                                <p class="upload">Upload CV/Resume</p>
                                <div class="w-100 position-relative">
                                    <input class="custom-file-input"  type="file" id="customFile" name="filename">
                                    <label class="custom-file-label" for="customFile">  </label>
                                </div><span class="nots">Allowed Type(s): .pdf, .doc, .docx </span>
                            </div>
                            <div class="col-sm-12 inpusrach">
                                <label class="che-box">
                                    <input type="checkbox" name="colorCheckbox" value="box-2"><span class="label-text">  By using this form you agree with the storage and handling of your data by this website.</span>
                                </label>
                            </div>
                            <div class="col-sm-12 inpusrach">
                                <button class="btnbottom" type="submit">Send
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                        <path d="M1.5 2.66987L9 7L1.5 11.3301L1.5 2.66987Z" stroke-width="2"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <ul class="color">
            <li class="active" data-value="css/default-theme.css"><span>LIGHT  </span>
                <svg version="1.1" id="day-light-time-sun" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" xml:space="preserve">
            <path d="M8,3C5.243,3,3,5.243,3,8c0,2.757,2.243,5,5,5s5-2.243,5-5C13,5.243,10.757,3,8,3z M8,11c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S9.654,11,8,11z"></path>
                    <rect x="7" width="2" height="2"></rect>
                    <rect x="7" y="14" width="2" height="2"></rect>
                    <rect x="14" y="7" width="2" height="2"></rect>
                    <rect y="7" width="2" height="2"></rect>
                    <rect x="11.95" y="11.95" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -5.3639 12.9501)" width="2" height="2"></rect>
                    <rect x="2.05" y="2.05" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.2635 3.0503)" width="2" height="2"></rect>
                    <rect x="2.05" y="11.95" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -8.2636 5.95)" width="2" height="2"></rect>
                    <rect x="11.95" y="2.05" transform="matrix(0.7071 -0.7071 0.7071 0.7071 1.6359 10.05)" width="2" height="2"></rect>
          </svg>
            </li>
            <li data-value="css/night-theme.css"><span>DARKE</span>
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5761 14.5765C18.7677 14.8513 17.9013 15.0003 17 15.0003C12.5817 15.0003 9 11.4186 9 7.00029C9 6.09888 9.14908 5.23229 9.42394 4.42383C6.26952 5.49607 4 8.48301 4 12C4 16.4183 7.58172 20 12 20C15.5169 20 18.5037 17.7307 19.5761 14.5765Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </li>
        </ul><!--End dark-->
        <!-- include ../pugjs/iconssocial.pug End iconssocial-->

    </section>

@endsection




