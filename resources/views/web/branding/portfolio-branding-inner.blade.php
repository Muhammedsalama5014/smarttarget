@extends('web.layout')
@section('title')
    {{ $branding->title }}
@endsection

@section('body')
    <section class="gallery-photos">
        <div class="container">
            <div class="dsn-stories">
                <ul class="row lightgallery" id="masonry">
                    <li class="card-container col-sm-12 architecture wow fadeInUp" data-wow-duration="2.3s">
                        <div class="dsn-stories-gallery">
                            <div class="p-relative">
                                <a href="{{asset("uploads/$branding->image1")}}">

                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-sm-4 architecture wow fadeInUp" data-wow-duration="2.3s">
                        <div class="dsn-stories-gallery">
                            <div class="p-relative">
                                <a href="{{asset("uploads/$branding->image2")}}">

                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-sm-4 architecture wow fadeInUp" data-wow-duration="2.3s">
                        <div class="dsn-stories-gallery">
                            <div class="p-relative">
                                <a href="{{asset("uploads/$branding->image3")}}">

                                </a>
                    </li>
                    <li class="card-container col-sm-4 architecture wow fadeInUp" data-wow-duration="2.3s">
                        <div class="dsn-stories-gallery">
                            <div class="p-relative">
                                <a href="{{asset("uploads/$branding->image4")}}">

                                </a>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="w-100 mt-4">
                <h3 class="title wow  fadeInUp" data-wow-duration="1s"> {{ $branding->title }}  </h3>
                <p class="textlight wow  fadeInUp" data-wow-duration="1s"><?php echo $branding->l_description ?></p>
            </div>
        </div>
        <ul class="color">
            <li class="active" data-value="css/default-theme.css"><span>LIGHT  </span>
                <svg version="1.1" id="day-light-time-sun" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     viewBox="0 0 16 16" xml:space="preserve">
            <path
                d="M8,3C5.243,3,3,5.243,3,8c0,2.757,2.243,5,5,5s5-2.243,5-5C13,5.243,10.757,3,8,3z M8,11c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S9.654,11,8,11z"></path>
                    <rect x="7" width="2" height="2"></rect>
                    <rect x="7" y="14" width="2" height="2"></rect>
                    <rect x="14" y="7" width="2" height="2"></rect>
                    <rect y="7" width="2" height="2"></rect>
                    <rect x="11.95" y="11.95" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -5.3639 12.9501)" width="2"
                          height="2"></rect>
                    <rect x="2.05" y="2.05" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.2635 3.0503)" width="2"
                          height="2"></rect>
                    <rect x="2.05" y="11.95" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -8.2636 5.95)" width="2"
                          height="2"></rect>
                    <rect x="11.95" y="2.05" transform="matrix(0.7071 -0.7071 0.7071 0.7071 1.6359 10.05)" width="2"
                          height="2"></rect>
          </svg>
            </li>
            <li data-value="css/night-theme.css"><span>DARKE</span>
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.5761 14.5765C18.7677 14.8513 17.9013 15.0003 17 15.0003C12.5817 15.0003 9 11.4186 9 7.00029C9 6.09888 9.14908 5.23229 9.42394 4.42383C6.26952 5.49607 4 8.48301 4 12C4 16.4183 7.58172 20 12 20C15.5169 20 18.5037 17.7307 19.5761 14.5765Z"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </li>
        </ul><!--End dark-->
    </section>

@endsection

@section('scripts')
    <script src="{{asset("web/js/plugins.min.js")}}"></script>
    <script src="{{asset("web/js/dsn-grid.min.js")}}"></script>
    <script src="{{asset("web/js/custom-img.js")}}"></script>

@endsection


