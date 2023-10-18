@extends('web.layout')
@section('title')
    portofolio
@endsection

@section('body')

    <section class="banner-slider portfolio">
        <div class="banner-container" data-fs-scroll="">
            <div class="sections">
                <input id="slide-1" type="radio" name="slides" checked="">
                <div class="section section0" data-href="">
                    <div class="container">
                        <div class="w-100 text-center">
                            <h2 class="title">{{$branding->title}}</h2>
                            <p class="textlight"><?php echo $branding->description ?></p>
                            <a class="btnbottom" href="{{url("portfoliobranding")}}">
                                Let’s Go
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                    <path d="M1.5 2.66987L9 7L1.5 11.3301L1.5 2.66987Z" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="photo"><img src="{{asset("uploads/$branding->bg_image")}}" alt=""></div>
                </div>
                <input id="slide-2" type="radio" name="slides">
                <div class="section section1 " data-href="">
                    <div class="container">
                        <div class="w-100 text-center">
                            <h2 class="title">{{$motion->title}}</h2>
                            <p class="textlight">
                                <?php echo $motion->description ?></p><a class="btnbottom" href="{{url("portfoliomotion")}}">
                                Let’s Go
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                    <path d="M1.5 2.66987L9 7L1.5 11.3301L1.5 2.66987Z" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="photo"><img src="{{asset("uploads/$motion->bg_image")}}" alt=""></div>
                </div>
                <input id="slide-3" type="radio" name="slides">
                <div class="section section2 " data-href="">
                    <div class="container">
                        <div class="w-100 text-center">
                            <h2 class="title">{{$voice->title}}</h2>
                            <p class="textlight"><?php echo $voice->description ?></p>
                            <a class="btnbottom" href="{{url("portfoliovoice")}}">
                                Let’s Go
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                    <path d="M1.5 2.66987L9 7L1.5 11.3301L1.5 2.66987Z" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="photo"><img src="{{asset("uploads/$voice->bg_image")}}" alt=""></div>
                </div>
                <input id="slide-4" type="radio" name="slides">
                <div class="section section3 " data-href="">
                    <div class="container">
                        <div class="w-100 text-center">
                            <h2 class="title">{{$social->title}}</h2>
                            <p class="textlight">
                                <?php echo $social->description ?></p>
                            <a class="btnbottom" href="{{url("portfoliosocial")}}">
                                Let’s Go
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                    <path d="M1.5 2.66987L9 7L1.5 11.3301L1.5 2.66987Z" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="photo"><img src="{{asset("uploads/$social->bg_image")}}" alt=""></div>
                </div>
                <input id="slide-5" type="radio" name="slides">
                <div class="section section4 " data-href="">
                    <div class="container">
                        <div class="w-100 text-center">
                            <h2 class="title">{{$webdesign->title}}</h2>
                            <p class="textlight">
                                <?php echo $webdesign->description ?></p><a class="btnbottom" href="{{url("portfoliowebdesign")}}">
                                Let’s Go
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                    <path d="M1.5 2.66987L9 7L1.5 11.3301L1.5 2.66987Z" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="photo"><img src="{{asset("uploads/$webdesign->bg_image")}}" alt=""></div>
                </div>
                <input id="slide-6" type="radio" name="slides">
                <div class="section section5 " data-href="">
                    <div class="container">
                        <div class="w-100 text-center">
                            <h2 class="title">{{$seo->title}}</h2>
                            <p class="textlight">
                                <?php echo $seo->description ?></p><a class="btnbottom" href="{{url("seo")}}">
                                Let’s Go
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                    <path d="M1.5 2.66987L9 7L1.5 11.3301L1.5 2.66987Z" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="photo"><img src="{{asset("uploads/$seo->bg_image")}}" alt=""></div>
                </div>
                <input id="slide-7" type="radio" name="slides">
                <div class="section section6 " data-href="">
                    <div class="container">
                        <div class="w-100 text-center">
                            <h2 class="title">{{$sem->title}}</h2>
                            <p class="textlight">
                                <?php echo $sem->description ?></p><a class="btnbottom" href="{{url("sem")}}">
                                Let’s Go
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                    <path d="M1.5 2.66987L9 7L1.5 11.3301L1.5 2.66987Z" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="photo"><img src="{{asset("uploads/$sem->bg_image")}}" alt=""></div>
                </div>
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
        <div class="iconssocial">
            <p>Follow us on</p>
            <nav class="social"><a class="icon-facebook" href="{{$setting->facebook}}" target="_blank" title="Facebook">
                    <svg id="Bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                        <path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"></path>
                    </svg></a><a class="icon-twitter" href="{{$setting->twitter}}" target="_blank" title="Twitter">
                    <svg id="Bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                        <path d="m21.534 7.113c.976-.693 1.797-1.558 2.466-2.554v-.001c-.893.391-1.843.651-2.835.777 1.02-.609 1.799-1.566 2.165-2.719-.951.567-2.001.967-3.12 1.191-.903-.962-2.19-1.557-3.594-1.557-2.724 0-4.917 2.211-4.917 4.921 0 .39.033.765.114 1.122-4.09-.2-7.71-2.16-10.142-5.147-.424.737-.674 1.58-.674 2.487 0 1.704.877 3.214 2.186 4.089-.791-.015-1.566-.245-2.223-.606v.054c0 2.391 1.705 4.377 3.942 4.835-.401.11-.837.162-1.29.162-.315 0-.633-.018-.931-.084.637 1.948 2.447 3.381 4.597 3.428-1.674 1.309-3.8 2.098-6.101 2.098-.403 0-.79-.018-1.177-.067 2.18 1.405 4.762 2.208 7.548 2.208 8.683 0 14.342-7.244 13.986-14.637z"></path>
                    </svg></a><a class="icon-instagram" href="{{$setting->instagram}}" target="_blank" title="Instagram">
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.4805 0H5.51913C2.47588 0 0 2.476 0 5.51924V14.4806C0 17.524 2.47588 19.9999 5.51913 19.9999H14.4805C17.524 19.9999 19.9999 17.5239 19.9999 14.4806V5.51924C20 2.476 17.524 0 14.4805 0ZM18.2255 14.4806C18.2255 16.5455 16.5455 18.2254 14.4806 18.2254H5.51913C3.45433 18.2255 1.77449 16.5455 1.77449 14.4806V5.51924C1.77449 3.45445 3.45433 1.77449 5.51913 1.77449H14.4805C16.5454 1.77449 18.2254 3.45445 18.2254 5.51924V14.4806H18.2255Z"></path>
                        <path d="M10.0001 4.84668C7.15848 4.84668 4.84668 7.15848 4.84668 10.0001C4.84668 12.8417 7.15848 15.1534 10.0001 15.1534C12.8418 15.1534 15.1536 12.8417 15.1536 10.0001C15.1536 7.15848 12.8418 4.84668 10.0001 4.84668ZM10.0001 13.3788C8.13705 13.3788 6.62117 11.8631 6.62117 10C6.62117 8.13681 8.13693 6.62105 10.0001 6.62105C11.8634 6.62105 13.3791 8.13681 13.3791 10C13.3791 11.8631 11.8632 13.3788 10.0001 13.3788Z"></path>
                        <path d="M15.3696 3.3418C15.0278 3.3418 14.6919 3.48021 14.4505 3.72272C14.2078 3.96405 14.0684 4.30002 14.0684 4.64309C14.0684 4.98509 14.208 5.32094 14.4505 5.56345C14.6918 5.80478 15.0278 5.94438 15.3696 5.94438C15.7127 5.94438 16.0475 5.80478 16.29 5.56345C16.5325 5.32094 16.6709 4.98497 16.6709 4.64309C16.6709 4.30002 16.5325 3.96405 16.29 3.72272C16.0487 3.48021 15.7127 3.3418 15.3696 3.3418Z"></path>
                    </svg></a><a class="icon-youtube" href="{{$setting->youtube}}" target="_blank" title="youtube">
                    <svg id="Layer_1" enable-background="new 0 0 511.982 511.982" height="512" viewBox="0 0 511.982 511.982" width="512" xmlns="http://www.w3.org/2000/svg">
                        <path d="m341.885 238.36-130-74c-6.188-3.524-13.787-3.488-19.946.091-6.158 3.581-9.947 10.167-9.947 17.29v148c0 7.123 3.789 13.709 9.947 17.29 6.159 3.58 13.757 3.616 19.946.091l130-74c13.396-7.478 13.392-27.287 0-34.762zm-119.894 56.984v-79.205l69.571 39.603zm282.306-145.855c-6.503-45.918-43.306-81.146-89.5-85.668-36.489-3.572-93.661-7.83-158.806-7.83s-122.316 4.258-158.806 7.83c-46.194 4.521-82.997 39.75-89.5 85.667-10.247 72.73-10.247 140.276 0 213.005 6.503 45.918 43.306 81.146 89.5 85.668 36.489 3.572 93.661 7.83 158.806 7.83s122.316-4.258 158.806-7.83c46.194-4.521 82.997-39.75 89.5-85.667 10.247-72.73 10.247-140.276 0-213.005zm-39.606 207.397c-3.906 27.584-26.025 48.747-53.791 51.465-35.604 3.486-91.379 7.641-154.909 7.641s-119.306-4.154-154.909-7.641c-27.766-2.718-49.885-23.881-53.791-51.466-4.844-34.203-7.3-68.148-7.3-100.894s2.456-66.69 7.3-100.895c3.906-27.584 26.025-48.747 53.791-51.465 35.604-3.486 91.379-7.641 154.909-7.641s119.306 4.154 154.909 7.641c27.766 2.718 49.885 23.881 53.791 51.466 9.722 69.018 9.722 132.771 0 201.789z"></path>
                    </svg></a><a class="icon-linkedin" href="{{$setting->linkedin}}" target="_blank" title="linkedin">
                    <svg viewBox="-21 -35 682.66669 682" width="682pt" xmlns="http://www.w3.org/2000/svg">
                        <path d="m77.613281-.667969c-46.929687 0-77.613281 30.816407-77.613281 71.320313 0 39.609375 29.769531 71.304687 75.8125 71.304687h.890625c47.847656 0 77.625-31.695312 77.625-71.304687-.894531-40.503906-29.777344-71.320313-76.714844-71.320313zm0 0"></path>
                        <path d="m8.109375 198.3125h137.195313v412.757812h-137.195313zm0 0"></path>
                        <path d="m482.054688 188.625c-74.011719 0-123.640626 69.546875-123.640626 69.546875v-59.859375h-137.199218v412.757812h137.191406v-230.5c0-12.339843.894531-24.660156 4.519531-33.484374 9.917969-24.640626 32.488281-50.167969 70.390625-50.167969 49.644532 0 69.5 37.851562 69.5 93.339843v220.8125h137.183594v-236.667968c0-126.78125-67.6875-185.777344-157.945312-185.777344zm0 0"></path>
                    </svg></a><a class="icon-whatsapp" href="{{$setting->whatsapp}}" target="_blank" title="whatsapp">
                    <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6319 3.34007C14.8778 1.58386 12.5449 0.616264 10.0596 0.615234C4.93836 0.615234 0.770424 4.78306 0.768364 9.90566C0.767677 11.5432 1.19546 13.1417 2.00856 14.5507L0.69043 19.3652L5.61585 18.0732C6.97301 18.8135 8.50091 19.2036 10.0558 19.2041H10.0597C15.1804 19.2041 19.3488 15.0359 19.3507 9.9131C19.3517 7.43042 18.3862 5.09617 16.6319 3.34007ZM10.0596 17.635H10.0564C8.67074 17.6344 7.31175 17.262 6.12592 16.5586L5.84405 16.3911L2.92123 17.1579L3.70137 14.3082L3.51769 14.016C2.74464 12.7865 2.33643 11.3654 2.33712 9.90623C2.33872 5.64846 5.80308 2.18445 10.0627 2.18445C12.1254 2.18513 14.0643 2.98943 15.5223 4.44912C16.9803 5.90881 17.7828 7.84904 17.7821 9.91253C17.7802 14.1706 14.3161 17.635 10.0596 17.635ZM14.2955 11.8513C14.0634 11.735 12.922 11.1736 12.7091 11.096C12.4965 11.0185 12.3415 10.9799 12.1869 11.2122C12.0321 11.4445 11.5873 11.9675 11.4518 12.1224C11.3163 12.2773 11.181 12.2968 10.9488 12.1805C10.7166 12.0644 9.96861 11.8191 9.08181 11.0282C8.39173 10.4126 7.92584 9.6524 7.79034 9.42009C7.65508 9.18754 7.7892 9.07402 7.8922 8.9463C8.14351 8.63422 8.39516 8.30704 8.47253 8.1522C8.55 7.99724 8.51121 7.86163 8.45307 7.74547C8.39516 7.62932 7.93088 6.48662 7.73747 6.02165C7.54887 5.56915 7.35764 5.63026 7.21505 5.62317C7.07978 5.61642 6.92494 5.61504 6.7701 5.61504C6.61538 5.61504 6.36384 5.67306 6.15098 5.90561C5.93823 6.13804 5.33856 6.6996 5.33856 7.84229C5.33856 8.98498 6.17043 10.0889 6.28648 10.2438C6.40252 10.3988 7.92355 12.7437 10.2523 13.7492C10.8062 13.9886 11.2386 14.1313 11.5758 14.2383C12.132 14.415 12.6379 14.39 13.038 14.3303C13.4841 14.2636 14.4114 13.7686 14.6051 13.2264C14.7985 12.6841 14.7985 12.2193 14.7403 12.1224C14.6824 12.0256 14.5276 11.9675 14.2955 11.8513Z"></path>
                    </svg></a></nav>
        </div><!--End iconssocial-->
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('web/js/fsscroll.js') }}"></script>
    <script src="{{ asset('web/js/script.js') }}"></script>
@endsection








