
@extends('web.layout')
@section('title')
    {{ $setting->name }}
@endsection

@section('body')
    <section class="minwork">
        <div class="container">
            <h2 class="title  text-center wow fadeInUp" data-wow-duration="1s">{{$web->title}}</h2>
            <div class="row">



                @foreach($allsites  as $onesite)
                    <div class="col-sm-4 itwork wow fadeInUp" data-wow-duration="1s"><a class="item" href="{{url("portfoliowebdesign/show/$onesite->id")}}">
                            <div class="photo"> <img src="{{asset("uploads/$onesite->main_image")}}" alt="Smart target" title="Smart target"></div>
                            <div class="content">
                                <div class="w-100">
                                    <h4 class="title">{{$onesite->title}}</h4>
                                    <p class="text"> <?php echo $onesite->s_description?> </p>
                                </div>
                            </div></a></div>
                @endforeach
            </div>
            {{$allsites->links("web.paginator.pagination")}}
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
    </section>

@endsection


