@extends('web.layout')
@section('title')
    {{ $servic->title }}
@endsection

@section('body')
     <div class="carousel slide slideservic" id="carouselExampleControls" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="w-100">
              <h2 class="title wow fadeInLeft" data-wow-duration="1s">{{ $servic->title }}</h2><span class="subtitle wow fadeInLeft" data-wow-duration="2.1s">{{ $servic->subtitle }} </span>
              <p class="textlight wow fadeInLeft" data-wow-duration="2.2s">{{ $servic->description }}</p>
              <!--a(href="#" class="showall wow fadeInLeft"  data-wow-duration="2.2s")
              | Show All
              svg(xmlns="http://www.w3.org/2000/svg" width="36" height="24" viewBox="0 0 36 24" fill="none")
               path(d="M2 9.99998H29.1715L22.5858 3.41411C21.8048 2.63317 21.8048 1.36677 22.5858 0.585701C23.3667 -0.195234 24.6332 -0.195234 25.4142 0.585701L35.4142 10.5857C36.1953 11.3667 36.1953 12.6331 35.4142 13.4141L25.4142 23.4141C25.0235 23.8047 24.5118 24 23.9999 24C23.4881 24 22.9762 23.8047 22.5858 23.4141C21.8048 22.6332 21.8048 21.3668 22.5858 20.5857L29.1715 14H2C0.895466 14 0 13.1045 0 12C0 10.8954 0.895466 9.99998 2 9.99998Z" fill="#4FACFE")
              -->
            </div>
          </div>
          <div class="photo"><img src="{{ asset("uploads/$servic->bg_image") }}" alt=""></div>
        </div>
        @foreach($services as $service)
        <div class="carousel-item">
          <div class="container">
            <div class="w-100">
              <div class="icon">
                <img src="{{ asset("uploads/$service->icon") }}">
              </div>
              <h2 class="title wow fadeInLeft" data-wow-duration="1s">{{ $service->title }}</h2><span class="subtitle wow fadeInLeft" data-wow-duration="1s">{{ $service->sub_title }}</span>
              <p class="textlight wow fadeInLeft" data-wow-duration="1s">{{ $service->description }}</p><a class="showall wow fadeInLeft" href="branding.blade.php" data-wow-duration="1s">Show All
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="24" viewBox="0 0 36 24" fill="none">
                  <path d="M2 9.99998H29.1715L22.5858 3.41411C21.8048 2.63317 21.8048 1.36677 22.5858 0.585701C23.3667 -0.195234 24.6332 -0.195234 25.4142 0.585701L35.4142 10.5857C36.1953 11.3667 36.1953 12.6331 35.4142 13.4141L25.4142 23.4141C25.0235 23.8047 24.5118 24 23.9999 24C23.4881 24 22.9762 23.8047 22.5858 23.4141C21.8048 22.6332 21.8048 21.3668 22.5858 20.5857L29.1715 14H2C0.895466 14 0 13.1045 0 12C0 10.8954 0.895466 9.99998 2 9.99998Z" fill="#4FACFE"></path>
                </svg></a>
            </div>
          </div>
          <div class="photo"><img src="{{ asset("uploads/$service->main_img") }}" alt=""></div>
        </div>
        @endforeach
      </div>
      <div class="a-pos">
        <ol class="carousel-indicators">
          <li class="active" data-target="#carouselExampleControls" data-slide-to="0"></li>
          <!--li(data-target="#carouselExampleControls" data-slide-to="1")-->
          <!--li(data-target="#carouselExampleControls" data-slide-to="2")-->
          <!--li(data-target="#carouselExampleControls" data-slide-to="3")-->
          <!--li(data-target="#carouselExampleControls" data-slide-to="4")-->
          <!--li(data-target="#carouselExampleControls" data-slide-to="5")-->
          <!--li(data-target="#carouselExampleControls" data-slide-to="6")-->
          <!--li(data-target="#carouselExampleControls" data-slide-to="7")-->
          <!--li(data-target="#carouselExampleControls" data-slide-to="8")-->
          <!--li(data-target="#carouselExampleControls" data-slide-to="9")-->
          <!--li(data-target="#carouselExampleControls" data-slide-to="10")-->
          <!--li(data-target="#carouselExampleControls" data-slide-to="11")-->
        </ol><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 30 20">
            <path d="M30 15.4743L22.4279 7.98717L14.8559 0.5L0 15.1895L4.07399 19.2177L14.8559 8.55642L25.9259 19.5025L30 15.4743Z"></path>
          </svg></a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 30 20">
            <path d="M30 15.4743L22.4279 7.98717L14.8559 0.5L0 15.1895L4.07399 19.2177L14.8559 8.55642L25.9259 19.5025L30 15.4743Z"></path>
          </svg></a>
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
    </div>
@endsection

@section('scripts')
     <script src="{{ asset('web/js/video.js') }}"></script>
@endsection

