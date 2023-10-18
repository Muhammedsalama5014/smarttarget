@extends('web.layout')
@section('title')
    {{ $setting->name }}
@endsection

@section('body')
    <div class="slider">
        <video
            width="120%"
            height="100%"
            autoplay=""
            loop=""
            muted=""
            id="myVideo"
        >
            <source src="{{ asset("uploads/$home->header_video") }}" type="video/mp4"/>
        </video>
        <ul class="color">
            <li class="active" data-value="css/default-theme.css">
                <span>LIGHT </span>
                <svg
                    version="1.1"
                    id="day-light-time-sun"
                    xmlns="http://www.w3.org/2000/svg"
                    x="0px"
                    y="0px"
                    viewBox="0 0 16 16"
                    xml:space="preserve"
                >
            <path
                d="M8,3C5.243,3,3,5.243,3,8c0,2.757,2.243,5,5,5s5-2.243,5-5C13,5.243,10.757,3,8,3z M8,11c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S9.654,11,8,11z"
            ></path>
                    <rect x="7" width="2" height="2"></rect>
                    <rect x="7" y="14" width="2" height="2"></rect>
                    <rect x="14" y="7" width="2" height="2"></rect>
                    <rect y="7" width="2" height="2"></rect>
                    <rect
                        x="11.95"
                        y="11.95"
                        transform="matrix(0.7071 -0.7071 0.7071 0.7071 -5.3639 12.9501)"
                        width="2"
                        height="2"
                    ></rect>
                    <rect
                        x="2.05"
                        y="2.05"
                        transform="matrix(0.7071 -0.7071 0.7071 0.7071 -1.2635 3.0503)"
                        width="2"
                        height="2"
                    ></rect>
                    <rect
                        x="2.05"
                        y="11.95"
                        transform="matrix(0.7071 -0.7071 0.7071 0.7071 -8.2636 5.95)"
                        width="2"
                        height="2"
                    ></rect>
                    <rect
                        x="11.95"
                        y="2.05"
                        transform="matrix(0.7071 -0.7071 0.7071 0.7071 1.6359 10.05)"
                        width="2"
                        height="2"
                    ></rect>
          </svg>
            </li>
            <li data-value="css/night-theme.css">
                <span>DARKE</span>
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.5761 14.5765C18.7677 14.8513 17.9013 15.0003 17 15.0003C12.5817 15.0003 9 11.4186 9 7.00029C9 6.09888 9.14908 5.23229 9.42394 4.42383C6.26952 5.49607 4 8.48301 4 12C4 16.4183 7.58172 20 12 20C15.5169 20 18.5037 17.7307 19.5761 14.5765Z"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    ></path>
                </svg>
            </li>
        </ul>
        <!--End dark-->
        <div class="iconssocial">
            <p>Follow us on</p>
            <nav class="social">
                <a class="icon-facebook" href="{{ $setting->facebook }}" target="_blank" title="Facebook">
                    <svg
                        id="Bold"
                        enable-background="new 0 0 24 24"
                        height="512"
                        viewBox="0 0 24 24"
                        width="512"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"
                        ></path>
                    </svg>
                </a
                ><a class="icon-twitter" href="{{ $setting->twitter }}" target="_blank" title="Twitter">
                    <svg
                        id="Bold"
                        enable-background="new 0 0 24 24"
                        height="512"
                        viewBox="0 0 24 24"
                        width="512"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="m21.534 7.113c.976-.693 1.797-1.558 2.466-2.554v-.001c-.893.391-1.843.651-2.835.777 1.02-.609 1.799-1.566 2.165-2.719-.951.567-2.001.967-3.12 1.191-.903-.962-2.19-1.557-3.594-1.557-2.724 0-4.917 2.211-4.917 4.921 0 .39.033.765.114 1.122-4.09-.2-7.71-2.16-10.142-5.147-.424.737-.674 1.58-.674 2.487 0 1.704.877 3.214 2.186 4.089-.791-.015-1.566-.245-2.223-.606v.054c0 2.391 1.705 4.377 3.942 4.835-.401.11-.837.162-1.29.162-.315 0-.633-.018-.931-.084.637 1.948 2.447 3.381 4.597 3.428-1.674 1.309-3.8 2.098-6.101 2.098-.403 0-.79-.018-1.177-.067 2.18 1.405 4.762 2.208 7.548 2.208 8.683 0 14.342-7.244 13.986-14.637z"
                        ></path>
                    </svg>
                </a
                ><a class="icon-instagram" href="{{ $setting->instagram }}" target="_blank" title="Instagram">
                    <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M14.4805 0H5.51913C2.47588 0 0 2.476 0 5.51924V14.4806C0 17.524 2.47588 19.9999 5.51913 19.9999H14.4805C17.524 19.9999 19.9999 17.5239 19.9999 14.4806V5.51924C20 2.476 17.524 0 14.4805 0ZM18.2255 14.4806C18.2255 16.5455 16.5455 18.2254 14.4806 18.2254H5.51913C3.45433 18.2255 1.77449 16.5455 1.77449 14.4806V5.51924C1.77449 3.45445 3.45433 1.77449 5.51913 1.77449H14.4805C16.5454 1.77449 18.2254 3.45445 18.2254 5.51924V14.4806H18.2255Z"
                        ></path>
                        <path
                            d="M10.0001 4.84668C7.15848 4.84668 4.84668 7.15848 4.84668 10.0001C4.84668 12.8417 7.15848 15.1534 10.0001 15.1534C12.8418 15.1534 15.1536 12.8417 15.1536 10.0001C15.1536 7.15848 12.8418 4.84668 10.0001 4.84668ZM10.0001 13.3788C8.13705 13.3788 6.62117 11.8631 6.62117 10C6.62117 8.13681 8.13693 6.62105 10.0001 6.62105C11.8634 6.62105 13.3791 8.13681 13.3791 10C13.3791 11.8631 11.8632 13.3788 10.0001 13.3788Z"
                        ></path>
                        <path
                            d="M15.3696 3.3418C15.0278 3.3418 14.6919 3.48021 14.4505 3.72272C14.2078 3.96405 14.0684 4.30002 14.0684 4.64309C14.0684 4.98509 14.208 5.32094 14.4505 5.56345C14.6918 5.80478 15.0278 5.94438 15.3696 5.94438C15.7127 5.94438 16.0475 5.80478 16.29 5.56345C16.5325 5.32094 16.6709 4.98497 16.6709 4.64309C16.6709 4.30002 16.5325 3.96405 16.29 3.72272C16.0487 3.48021 15.7127 3.3418 15.3696 3.3418Z"
                        ></path>
                    </svg>
                </a
                ><a class="icon-youtube" href="{{ $setting->youtube }}" target="_blank" title="youtube">
                    <svg
                        id="Layer_1"
                        enable-background="new 0 0 511.982 511.982"
                        height="512"
                        viewBox="0 0 511.982 511.982"
                        width="512"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="m341.885 238.36-130-74c-6.188-3.524-13.787-3.488-19.946.091-6.158 3.581-9.947 10.167-9.947 17.29v148c0 7.123 3.789 13.709 9.947 17.29 6.159 3.58 13.757 3.616 19.946.091l130-74c13.396-7.478 13.392-27.287 0-34.762zm-119.894 56.984v-79.205l69.571 39.603zm282.306-145.855c-6.503-45.918-43.306-81.146-89.5-85.668-36.489-3.572-93.661-7.83-158.806-7.83s-122.316 4.258-158.806 7.83c-46.194 4.521-82.997 39.75-89.5 85.667-10.247 72.73-10.247 140.276 0 213.005 6.503 45.918 43.306 81.146 89.5 85.668 36.489 3.572 93.661 7.83 158.806 7.83s122.316-4.258 158.806-7.83c46.194-4.521 82.997-39.75 89.5-85.667 10.247-72.73 10.247-140.276 0-213.005zm-39.606 207.397c-3.906 27.584-26.025 48.747-53.791 51.465-35.604 3.486-91.379 7.641-154.909 7.641s-119.306-4.154-154.909-7.641c-27.766-2.718-49.885-23.881-53.791-51.466-4.844-34.203-7.3-68.148-7.3-100.894s2.456-66.69 7.3-100.895c3.906-27.584 26.025-48.747 53.791-51.465 35.604-3.486 91.379-7.641 154.909-7.641s119.306 4.154 154.909 7.641c27.766 2.718 49.885 23.881 53.791 51.466 9.722 69.018 9.722 132.771 0 201.789z"
                        ></path>
                    </svg>
                </a
                ><a class="icon-linkedin" href="{{ $setting->linkedin }}" target="_blank" title="linkedin">
                    <svg
                        viewBox="-21 -35 682.66669 682"
                        width="682pt"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="m77.613281-.667969c-46.929687 0-77.613281 30.816407-77.613281 71.320313 0 39.609375 29.769531 71.304687 75.8125 71.304687h.890625c47.847656 0 77.625-31.695312 77.625-71.304687-.894531-40.503906-29.777344-71.320313-76.714844-71.320313zm0 0"
                        ></path>
                        <path
                            d="m8.109375 198.3125h137.195313v412.757812h-137.195313zm0 0"
                        ></path>
                        <path
                            d="m482.054688 188.625c-74.011719 0-123.640626 69.546875-123.640626 69.546875v-59.859375h-137.199218v412.757812h137.191406v-230.5c0-12.339843.894531-24.660156 4.519531-33.484374 9.917969-24.640626 32.488281-50.167969 70.390625-50.167969 49.644532 0 69.5 37.851562 69.5 93.339843v220.8125h137.183594v-236.667968c0-126.78125-67.6875-185.777344-157.945312-185.777344zm0 0"
                        ></path>
                    </svg>
                </a
                ><a class="icon-whatsapp" href="{{ $setting->whatsapp }}" target="_blank" title="whatsapp">
                    <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            clip-rule="evenodd"
                            d="M16.6319 3.34007C14.8778 1.58386 12.5449 0.616264 10.0596 0.615234C4.93836 0.615234 0.770424 4.78306 0.768364 9.90566C0.767677 11.5432 1.19546 13.1417 2.00856 14.5507L0.69043 19.3652L5.61585 18.0732C6.97301 18.8135 8.50091 19.2036 10.0558 19.2041H10.0597C15.1804 19.2041 19.3488 15.0359 19.3507 9.9131C19.3517 7.43042 18.3862 5.09617 16.6319 3.34007ZM10.0596 17.635H10.0564C8.67074 17.6344 7.31175 17.262 6.12592 16.5586L5.84405 16.3911L2.92123 17.1579L3.70137 14.3082L3.51769 14.016C2.74464 12.7865 2.33643 11.3654 2.33712 9.90623C2.33872 5.64846 5.80308 2.18445 10.0627 2.18445C12.1254 2.18513 14.0643 2.98943 15.5223 4.44912C16.9803 5.90881 17.7828 7.84904 17.7821 9.91253C17.7802 14.1706 14.3161 17.635 10.0596 17.635ZM14.2955 11.8513C14.0634 11.735 12.922 11.1736 12.7091 11.096C12.4965 11.0185 12.3415 10.9799 12.1869 11.2122C12.0321 11.4445 11.5873 11.9675 11.4518 12.1224C11.3163 12.2773 11.181 12.2968 10.9488 12.1805C10.7166 12.0644 9.96861 11.8191 9.08181 11.0282C8.39173 10.4126 7.92584 9.6524 7.79034 9.42009C7.65508 9.18754 7.7892 9.07402 7.8922 8.9463C8.14351 8.63422 8.39516 8.30704 8.47253 8.1522C8.55 7.99724 8.51121 7.86163 8.45307 7.74547C8.39516 7.62932 7.93088 6.48662 7.73747 6.02165C7.54887 5.56915 7.35764 5.63026 7.21505 5.62317C7.07978 5.61642 6.92494 5.61504 6.7701 5.61504C6.61538 5.61504 6.36384 5.67306 6.15098 5.90561C5.93823 6.13804 5.33856 6.6996 5.33856 7.84229C5.33856 8.98498 6.17043 10.0889 6.28648 10.2438C6.40252 10.3988 7.92355 12.7437 10.2523 13.7492C10.8062 13.9886 11.2386 14.1313 11.5758 14.2383C12.132 14.415 12.6379 14.39 13.038 14.3303C13.4841 14.2636 14.4114 13.7686 14.6051 13.2264C14.7985 12.6841 14.7985 12.2193 14.7403 12.1224C14.6824 12.0256 14.5276 11.9675 14.2955 11.8513Z"
                        ></path>
                    </svg
                    >
                </a>
            </nav>
        </div>
        <!--End iconssocial-->
        <div class="muted" id="audio-control">
            <svg
                class="iconmuted"
                version="1.1"
                id="Layer_1"
                xmlns="http://www.w3.org/2000/svg"
                x="0px"
                y="0px"
                viewBox="0 0 469.333 469.333"
                style="enable-background: new 0 0 469.333 469.333"
                xml:space="preserve"
            >
          <path
              d="M206.885,43.544c-3.875-1.698-8.448-0.896-11.542,2.042L85.49,149.336H10.667C4.771,149.336,0,154.107,0,160.002v149.333 c0,5.896,4.771,10.667,10.667,10.667H85.49l109.854,103.75c2.021,1.917,4.656,2.917,7.323,2.917c1.427,0,2.865-0.281,4.219-0.875 c3.917-1.677,6.448-5.531,6.448-9.792V53.336C213.333,49.075,210.802,45.221,206.885,43.544z M192,391.252l-94.948-89.667 c-1.979-1.875-4.604-2.917-7.323-2.917H21.333v-128h68.396c2.719,0,5.344-1.042,7.323-2.917L192,78.086V391.252z"
          ></path>
                <path
                    d="M372.063,44.7c-4.813-3.469-11.469-2.385-14.896,2.375c-3.458,4.771-2.396,11.438,2.375,14.896 C414.938,102.096,448,166.659,448,234.669c0,68.01-33.063,132.573-88.458,172.698c-4.771,3.458-5.833,10.125-2.375,14.896 c2.083,2.875,5.344,4.406,8.646,4.406c2.167,0,4.354-0.656,6.25-2.031c60.906-44.125,97.271-115.146,97.271-189.969 C469.333,159.846,432.969,88.825,372.063,44.7z"
                ></path>
                <path
                    d="M314.01,108.304c-4.948-3.125-11.563-1.635-14.708,3.354c-3.135,4.979-1.635,11.563,3.354,14.708 c37.573,23.646,60.01,64.135,60.01,108.302c0,44.167-22.438,84.656-60.01,108.302c-4.99,3.146-6.49,9.729-3.354,14.708 c2.031,3.229,5.5,4.99,9.042,4.99c1.938,0,3.906-0.531,5.667-1.635C357.833,333.45,384,286.221,384,234.669 C384,183.117,357.833,135.888,314.01,108.304z"
                ></path>
                <path
                    d="M272.75,183.45c-4.729-3.531-11.406-2.531-14.927,2.177c-3.521,4.729-2.542,11.417,2.177,14.927 c11.021,8.208,17.333,20.635,17.333,34.115c0,13.479-6.313,25.906-17.333,34.115c-4.719,3.51-5.698,10.198-2.177,14.927 c2.094,2.813,5.302,4.292,8.563,4.292c2.208,0,4.448-0.688,6.365-2.115c16.469-12.26,25.917-30.937,25.917-51.219 S289.219,195.711,272.75,183.45z"
                ></path>
        </svg>
            <svg
                class="iconunmuted"
                viewBox="0 0 64 64"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g id="_28_Mute" data-name="28 Mute">
                    <path
                        d="m35.394 10.29-18.6822 11.71h-10.7118a3.0033 3.0033 0 0 0 -3 3v14a3.0033 3.0033 0 0 0 3 3h10.7181l18.6989 11.4883a2.9876 2.9876 0 0 0 4.5708-2.5557v-38.1a3.0171 3.0171 0 0 0 -4.5938-2.5426zm-30.394 28.71v-14a1.0009 1.0009 0 0 1 1-1h10v16h-10a1.0009 1.0009 0 0 1 -1-1zm32.9878 11.9326a.9909.9909 0 0 1 -1.5239.8526l-18.4639-11.3452v-16.8863l18.4561-11.5683a.9862.9862 0 0 1 1.5317.8476z"
                    ></path>
                    <path
                        d="m60.4836 39.0721-7.0708-7.0708 7.0726-7.0726c.9309-.9034-.51-2.3453-1.4141-1.4141l-7.0726 7.0726-7.0717-7.0717c-.9034-.9309-2.3453.51-1.4141 1.4141l7.0718 7.0717-7.07 7.07a1 1 0 0 0 1.4141 1.4141l7.07-7.07 7.0712 7.0708a1 1 0 0 0 1.4136-1.4141z"
                    ></path>
                </g>
            </svg>
        </div>
    </div>
    <!--End Slider-->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 item wow fadeInLeft" data-wow-duration="1s">
                    <div class="w-100">
                        <h2 class="title">{{ $home->who_title }}</h2>
                        <p class="textlight">
                            <?php echo $home->who_description1 ?>
                        </p>
                        <span class="subtext"
                        > <?php echo $home->who_description2 ?> </span
                        ><a class="bottom" href="{{ url('/aboutus') }}"><span>Know More</span></a>
                    </div>
                </div>
                <div class="col-sm-6 item wow fadeInRight" data-wow-duration="1s">
                    <div class="sliderabout">
                        <ul>
                            <li><img src="{{ asset("uploads/$home->who_img1") }}" alt=""/></li>
                            <li><img src="{{ asset("uploads/$home->who_img2") }}" alt=""/></li>
                            <li><img src="{{ asset("uploads/$home->who_img3") }}" alt=""/></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-row wow fadeInUp" data-wow-duration="1s">
                <div class="col-sm-6 item">
                    <div class="w-100">
                        <h2 class="title">{{ $home->about_title }}</h2>
                        <p class="textlight">
                            <?php echo $home->about_description1 ?>
                        </p>
                        <span class="subtext">
                <?php echo $home->about_description2 ?></span
                        >
                    </div>
                </div>
                <div class="col-sm-12 item">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a
                                class="nav-link active show"
                                id="item-1-tab"
                                data-toggle="tab"
                                href="#item-1"
                                role="tab"
                                aria-controls="item-1"
                                aria-selected="true"
                            >
                                <i class="bord"></i>Smart mission</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                id="item-2-tab"
                                data-toggle="tab"
                                href="#item-2"
                                role="tab"
                                aria-controls="item-2"
                                aria-selected="false"
                            >
                                <i class="bord"></i>Smart Vision</a
                            >
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div
                            class="tab-pane fade show active"
                            id="item-1"
                            role="tabpanel"
                            aria-labelledby="item-1-tab"
                        >
                            <div class="row">
                                <div class="col-sm-6 items">
                                    <p class="textlight">
                                        <?php echo $home->mission ?>
                                    </p>
                                </div>
                                <div class="col-sm-6 items">
                                    <div class="photo"><img src="{{ asset("uploads/$home->mission_img") }}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="tab-pane"
                            id="item-2"
                            role="tabpanel"
                            aria-labelledby="item-2-tab"
                        >
                            <div class="row">
                                <div class="col-sm-6 items">
                                    <p class="textlight">
                                        <?php echo $home->vission ?>
                                    </p>
                                </div>
                                <div class="col-sm-6 items">
                                    <div class="photo"><img src="{{ asset("uploads/$home->vission_img") }}" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End minabout-->
    <section class="minwork">
        <div class="container">
            <h2
                class="title bord-bot text-center wow fadeInUp"
                data-wow-duration="1s"
            >
                Our Latest Work
            </h2>
            <ul
                class="nav nav-tabs wow fadeInUp"
                data-wow-duration="1s"
                id="myTab"
                role="tablist"
            >
                <li class="nav-item">
                    <a
                        class="nav-link active show"
                        id="item-11-tab"
                        data-toggle="tab"
                        href="#item-11"
                        role="tab"
                        aria-controls="item-11"
                        aria-selected="true"
                    >Branding</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="item-22-tab"
                        data-toggle="tab"
                        href="#item-22"
                        role="tab"
                        aria-controls="item-22"
                        aria-selected="false"
                    >Social Media</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="item-3-tab"
                        data-toggle="tab"
                        href="#item-3"
                        role="tab"
                        aria-controls="item-3"
                        aria-selected="false"
                    >Voice Over</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="item-4-tab"
                        data-toggle="tab"
                        href="#item-4"
                        role="tab"
                        aria-controls="item-4"
                        aria-selected="false"
                    >Media Production</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        id="item-5-tab"
                        data-toggle="tab"
                        href="#item-5"
                        role="tab"
                        aria-controls="item-5"
                        aria-selected="false"
                    >WEB / APPs</a
                    >
                </li>
            </ul>
            <div
                class="tab-content wow fadeInUp"
                data-wow-duration="1s"
                id="myTabContent"
            >
                <div
                    class="tab-pane fade show active"
                    id="item-11"
                    role="tabpanel"
                    aria-labelledby="item-11-tab"
                >
                    <div class="row">
                        @foreach($brandings as $branding)
                            <div class="col-sm-4 itwork">
                                <a class="item" href="{{ url("/branding/$branding->id") }}">
                                    <div class="photo">
                                        <img
                                            src="{{ asset("uploads/$branding->main_image") }}"
                                            alt="{{ $branding->main_image_title }}"
                                            title="{{ $branding->main_image_title }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="w-100">
                                            <h4 class="title">{{ $branding->title }}</h4>
                                            <span class="position">{{ $branding->categories }}</span>
                                            <p class="text">
                                                    <?php echo $branding->s_description ?>
                                            </p>
                                        </div>
                                    </div>
                                </a
                                >
                            </div>
                        @endforeach
                    </div>
                </div>
                <div
                    class="tab-pane"
                    id="item-22"
                    role="tabpanel"
                    aria-labelledby="item-22-tab"
                >
                    <div class="row">
                        @foreach ($socials as $social)
                            <div class="col-sm-4 itwork">
                                <a class="item" href="{{ url("/socialmedia/$social->id") }}">
                                    <div class="photo">
                                        <img
                                            src="{{ asset("uploads/$social->main_image") }}"
                                            alt="{{ $social->main_image_title }}"
                                            title="{{ $social->main_image_title }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="w-100">
                                            <h4 class="title">{{ $social->title }}</h4>
                                            <span class="position">{{ $social->categories }}</span>
                                            <p class="text">
                                                    <?php echo $social->s_description ?>
                                            </p>
                                        </div>
                                    </div>
                                </a
                                >
                            </div>
                        @endforeach
                    </div>
                </div>
                <div
                    class="tab-pane"
                    id="item-3"
                    role="tabpanel"
                    aria-labelledby="item-3-tab"
                >
                    <div class="row">
                        @foreach($voices as $voice)
                            <div class="col-sm-3 v-item">
                                <div class="inner">
                                    <div class="photo">
                                        <img
                                            src="{{ asset("web/images/work/play.png") }}"
                                            alt="Smart target"
                                            title="Smart target"
                                        /><span class="iconplay"
                                        ><i class="onitem">
                        <svg
                            width="25"
                            height="31"
                            viewBox="0 0 25 31"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                              d="M0 6.00135V24.202C0 27.5149 1.81974 30.201 4.06648 30.201C6.31112 30.201 8.1298 27.5138 8.1298 24.202V6.00135C8.1298 2.68834 6.30954 0 4.06648 0C1.81856 0 0 2.68821 0 6.00135Z"
                              fill="white"
                          ></path>
                          <path
                              d="M16.8672 6.00135V24.202C16.8672 27.5149 18.688 30.201 20.9337 30.201C23.1788 30.201 24.9996 27.5138 24.9996 24.202V6.00135C24.9996 2.68834 23.1788 0 20.9337 0C18.688 0 16.8672 2.68821 16.8672 6.00135Z"
                              fill="white"
                          ></path></svg></i
                                            ><i class="towitem">
                        <svg
                            width="25"
                            height="28"
                            viewBox="0 0 25 28"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                              d="M0 3.92669V24.0728C0 27.5731 2.42241 28.9979 5.41132 27.2584L22.7586 17.1513C25.7471 15.4105 25.7471 12.5888 22.7586 10.8486L5.41132 0.742231C2.42241 -0.998694 0 0.42749 0 3.92669Z"
                              fill="white"
                          ></path></svg></i
                                            ></span>
                                    </div>
                                    <div class="timebar">
                                        <span class="time">00:30</span>
                                        <div class="bar">
                                            <div class="innerbar" style="width: 50%">
                                                <span class="circle"></span>
                                            </div>
                                        </div>
                                        <span class="time">01:00 </span>
                                    </div>
                                    <h3 class="title">{{ $voice->title }}</h3>
                                    <span class="type">{{ $voice->type }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div
                    class="tab-pane"
                    id="item-4"
                    role="tabpanel"
                    aria-labelledby="item-4-tab"
                >
                    <div class="row">
                        @foreach($motions as $motion)
                            <div class="col-sm-4 itwork">
                                <a class="item" href="{{ url("/motion/$motion->id") }}">
                                    <div class="photo">
                                        <img
                                            src="{{ asset("uploads/$motion->video5") }}"
                                        />
                                    </div>
                                    <div class="content">
                                        <div class="w-100">
                                            <h4 class="title">{{ $motion->title }}</h4>
                                            <span class="position">{{ $motion->company }}</span>
                                        </div>
                                    </div>
                                </a
                                >
                            </div>
                        @endforeach
                    </div>
                </div>
                <div
                    class="tab-pane"
                    id="item-5"
                    role="tabpanel"
                    aria-labelledby="item-5-tab"
                >
                    <ul class="nav nav-tabs newtabs" id="myTab2" role="tablist">
                        <li class="nav-item">
                            <a
                                class="nav-link active show"
                                id="item-w-tab"
                                data-toggle="tab"
                                href="#item-w"
                                role="tab"
                                aria-controls="item-w"
                                aria-selected="true"
                            >Websites</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                id="item-a-tab"
                                data-toggle="tab"
                                href="#item-a"
                                role="tab"
                                aria-controls="item-a"
                                aria-selected="false"
                            >Applications</a
                            >
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                        <div
                            class="tab-pane fade show active"
                            id="item-w"
                            role="tabpanel"
                            aria-labelledby="item-w-tab"
                        >
                            <div class="row">
                                @foreach($websites as $website)
                                    <div class="col-sm-4 itwork">
                                        <a class="item" href="{{ url("/website/$website->id") }}">
                                            <div class="photo">
                                                <img
                                                    src="{{ asset("uploads/$website->main_image") }}"
                                                    alt="{{ $website->main_image_title }}"
                                                    title="{{ $website->main_image_title }}"
                                                />
                                            </div>
                                            <div class="content">
                                                <div class="w-100">
                                                    <h4 class="title">{{ $website->title }}</h4>
                                                    <p class="text">
                                                            <?php echo $website->s_description ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </a
                                        >
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="textcenter m-0 wow fadeInUp" data-wow-duration="1s">
                <a class="bottom" href="{{url("/portfolio")}}"><span>See More</span></a
                ><a class="bottom st-btn" href="best-of-month.blade.php"
                ><span>Best of month</span>
                </a>
            </div>
        </div>
    </section>
    <!--End minwork-->
    <section class="clients">
        <div class="container">
            <div class="slider-clients wow fadeInUp" data-wow-duration="1s">
                @foreach($clients as $client)
                    <div class="itemslide">
                        <a class="photo" href="{{ $client->link }}"
                        ><img src="{{ asset("uploads/$client->name") }}" alt="" title=""
                            /></a>
                    </div>
                @endforeach
                <!-- TEnd itemslide-->
            </div>
            <div class="textcenter wow fadeInUp" data-wow-duration="1s">
                <div class="w-100 text-center">
                    <h2 class="title">Deal with us</h2>
                    <p class="textlight">To join to our family</p>
                    <a class="bottom" href="{{url("/letstalk")}}"><span>Get Started</span> </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End clients--><!--End clients-->
    <section class="minarticles">
        <div class="container">
            <h2
                class="title bord-bot text-center wow fadeInUp"
                data-wow-duration="1s"
            >
                LATEST NEWS & ARTICLES
            </h2>
        </div>
        <div class="slider-articles wow fadeInUp" data-wow-duration="1s">
            @foreach($blogs as $blog)
                <div class="item">
                    <a class="photo" href="{{url("blog/show/$blog->id")}}">
                        <img
                            src="{{ asset("uploads/$blog->image") }}"
                            alt="{{ $blog->image_title }}"
                            title="{{ $blog->image_title }}"
                        />
                    </a>
                    <div class="content">
                        <div class="minhead">
                            <h4 class="title">{{ $blog->title }}</h4>
                            <ul class="listlike">
                                <li>
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 17H9.31L8.36 21.57L8.33 21.89C8.33 22.3 8.5 22.68 8.77 22.95L9.83 24C9.83 24 16.92 17.15 17 17V4H6C5.17 4 4.46 4.5 4.16 5.22L1.14 12.27C1.05 12.5 1 12.74 1 13V15C1 16.1 1.9 17 3 17ZM19 17H23V4H19V17Z"
                                        ></path>
                                    </svg
                                    >
                                    (0)
                                </li>
                                <li class="active">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M3 7H9.31L8.36 2.43L8.33 2.11C8.33 1.7 8.5 1.32 8.77 1.05L9.83 0C9.83 0 16.92 6.85 17 7V20H6C5.17 20 4.46 19.5 4.16 18.78L1.14 11.73C1.05 11.5 1 11.26 1 11V9C1 7.9 1.9 7 3 7ZM19 7H23V20H19V7Z"
                                        ></path>
                                    </svg
                                    >
                                    (20)
                                </li>
                            </ul>
                        </div>
                        <p class="textlight">
                                <?php echo $blog->s_description ?>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="textcenter m-0 wow fadeInUp" data-wow-duration="1s">
            <a class="bottom" href="{{url("/blog")}}"><span>See More</span> </a>
        </div>
    </section>
    <!-- End minarticles--><!--End minarticles-->
    <section class="minteams">
        <div class="container">
            <h2
                class="title bord-bot text-center wow fadeInUp"
                data-wow-duration="1s"
            >
                Meet Smart team
            </h2>
            <div class="row">
                @foreach($teams as $team)
                    @if($team->position === "CEO")
                        <div class="col-sm-12 item wow fadeInUp" data-wow-duration="1s">
                            <div class="inner flex">
                                <a class="photo" href="{{ url("/team/$team->id") }}"
                                ><img src="{{ asset("uploads/$team->img") }}" alt="" title=""
                                    /></a>
                                <div class="content">
                                    <h3 class="title">{{ $team->name }}</h3>
                                    <span class="position">{{ $team->position }}</span>
                                    <p class="textlight">
                                            <?php echo $team->description ?>
                                    </p>
                                    <div class="btns">
                                        <a class="see" href="{{ url("/team/$team->id") }}"
                                        >See Profile
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 14">
                                                <path
                                                    d="M1.5 2.66987L9 7L1.5 11.3301L1.5 2.66987Z"
                                                    stroke-width="2"
                                                ></path>
                                            </svg
                                            >
                                        </a>
                                        <div class="bottoms">
                      <span class="p-btn">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 49 49"
                            fill="none"
                        >
                          <circle
                              cx="24.5"
                              cy="24.5"
                              r="24.5"
                              fill="#18AAE3"
                          ></circle>
                          <path
                              d="M29.6515 36.3321L29.239 38.018C28.0018 38.5064 27.0134 38.8781 26.2774 39.1336C25.5407 39.39 24.6846 39.5175 23.7092 39.5175C22.2113 39.5175 21.0463 39.1505 20.2153 38.4217C19.3844 37.69 18.9688 36.7627 18.9688 35.6379C18.9688 35.2024 18.9989 34.7546 19.0616 34.2982C19.1248 33.8413 19.2254 33.3268 19.3629 32.7517L20.9092 27.2787C21.0468 26.7546 21.1637 26.2581 21.2574 25.7885C21.3523 25.3218 21.3981 24.8925 21.3981 24.506C21.3981 23.807 21.2534 23.3181 20.9653 23.0433C20.6772 22.7692 20.1275 22.6301 19.3114 22.6301C18.9116 22.6301 18.5008 22.6941 18.082 22.8179C17.6614 22.9422 17.3018 23.0623 17 23.174L17.4135 21.4867C18.4264 21.0742 19.3947 20.7211 20.3209 20.428C21.2471 20.134 22.1222 19.987 22.9499 19.987C24.4375 19.987 25.5854 20.3465 26.3915 21.0655C27.1975 21.7851 27.6004 22.7179 27.6004 23.8673C27.6004 24.1052 27.574 24.5242 27.5171 25.1232C27.4615 25.7234 27.3581 26.2734 27.2073 26.7737L25.6677 32.2247C25.5415 32.6625 25.428 33.163 25.3293 33.7263C25.2274 34.2858 25.1788 34.7133 25.1788 35.0001C25.1788 35.7239 25.3401 36.218 25.6637 36.4807C25.9896 36.7434 26.551 36.8741 27.3483 36.8741C27.7227 36.8741 28.1486 36.8077 28.6219 36.6773C29.0938 36.5469 29.438 36.4323 29.6515 36.3321ZM30.042 13.4471C30.042 14.3968 29.684 15.2079 28.9647 15.8748C28.2473 16.5441 27.3827 16.879 26.3713 16.879C25.3568 16.879 24.4901 16.5441 23.7645 15.8748C23.0402 15.2076 22.6772 14.3968 22.6772 13.4471C22.6772 12.4992 23.0402 11.6868 23.7645 11.0114C24.4888 10.337 25.3571 10 26.3713 10C27.3825 10 28.2473 10.3378 28.9647 11.0114C29.6845 11.6868 30.042 12.4994 30.042 13.4471Z"
                              fill="white"
                          ></path></svg
                        ></span>
                                            <div>
                        <span
                            class="v-icon vpop"
                            data-type="youtube"
                            data-id="6xcG6ttMDVY"
                            data-autoplay="true"
                        >
                          <svg
                              xmlns="http://www.w3.org/2000/svg"
                              viewBox="0 0 11 14"
                          >
                            <path
                                d="M1.5 2.66987L9 7L1.5 11.3301L1.5 2.66987Z"
                                stroke-width="2"
                            ></path></svg></span
                        ><span class="v-icon">
                          <svg
                              viewBox="0 0 31 24"
                              xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M26.6275 6.99316C27.0404 6.99316 27.375 7.32776 27.375 7.74067V16.3121C27.375 16.725 27.0404 17.0596 26.6275 17.0596C26.2146 17.0596 25.88 16.725 25.88 16.3121V7.74067C25.88 7.33488 26.2146 6.99316 26.6275 6.99316Z"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M30.2525 8.70898C30.6654 8.70898 31 9.04358 31 9.45649V14.5965C31 15.0094 30.6654 15.344 30.2525 15.344C29.8253 15.344 29.505 14.8101 29.505 14.4256V9.45649C29.4979 9.0507 29.8396 8.70898 30.2525 8.70898Z"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M1.29937 8.70898C1.71228 8.70898 2.04688 9.04358 2.04688 9.45649V14.5965C2.04688 15.0094 1.71228 15.344 1.29937 15.344C0.886457 15.344 0.551859 15.0094 0.551859 14.5965V9.45649C0.551859 9.0507 0.886457 8.70898 1.29937 8.70898Z"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M4.92241 6.99316C5.33532 6.99316 5.66992 7.32776 5.66992 7.74067V16.3121C5.66992 16.725 5.33532 17.0596 4.92241 17.0596C4.5095 17.0596 4.17491 16.725 4.17491 16.3121V7.74067C4.16779 7.33488 4.5095 6.99316 4.92241 6.99316Z"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M8.5396 2.36621C8.95251 2.36621 9.28711 2.70081 9.28711 3.11372V20.9471C9.28711 21.36 8.95251 21.6946 8.5396 21.6946C8.12669 21.6946 7.79209 21.36 7.79209 20.9471V3.11372C7.79209 2.70081 8.12669 2.36621 8.5396 2.36621Z"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M12.1568 4.93652C12.5697 4.93652 12.9043 5.27112 12.9043 5.68403V18.3703C12.9043 18.7832 12.5697 19.1178 12.1568 19.1178C11.7439 19.1178 11.4093 18.7832 11.4093 18.3703V5.68403C11.4093 5.27824 11.7439 4.93652 12.1568 4.93652Z"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M15.772 0.821289C16.1849 0.821289 16.5195 1.15589 16.5195 1.5688V22.4848C16.5195 22.8977 16.1849 23.2323 15.772 23.2323C15.3591 23.2323 15.0245 22.8977 15.0245 22.4848V1.5688C15.0245 1.15589 15.3591 0.821289 15.772 0.821289Z"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M19.3951 4.93652C19.808 4.93652 20.1426 5.27112 20.1426 5.68403V18.3703C20.1426 18.7832 19.808 19.1178 19.3951 19.1178C18.9822 19.1178 18.6476 18.7832 18.6476 18.3703V5.69115C18.6476 5.27824 18.9822 4.93652 19.3951 4.93652Z"
                            ></path>
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M23.0123 2.36621C23.4252 2.36621 23.7598 2.70081 23.7598 3.11372V20.9471C23.7598 21.36 23.4252 21.6946 23.0123 21.6946C22.5993 21.6946 22.2647 21.36 22.2647 20.9471V3.11372C22.2647 2.70081 22.5993 2.36621 23.0123 2.36621Z"
                            ></path></svg></span
                                                ><span class="v-icon btnshow">
                          <svg
                              viewBox="0 0 24 19"
                              xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                                d="M22.5675 0H0.698683C0.314407 0 0 0.314407 0 0.698683C0 1.08296 0.314407 1.39737 0.698683 1.39737H22.5675C22.9517 1.39737 23.2662 1.08296 23.2662 0.698683C23.2662 0.314407 22.9517 0 22.5675 0Z"
                            ></path>
                            <path
                                d="M16.0697 5.79883H0.698683C0.314407 5.79883 0 6.11324 0 6.49751C0 6.88179 0.314407 7.19619 0.698683 7.19619H16.0697C16.454 7.19619 16.7684 6.88179 16.7684 6.49751C16.7684 6.11324 16.454 5.79883 16.0697 5.79883Z"
                            ></path>
                            <path
                                d="M22.5675 11.6689H0.698683C0.314407 11.6689 0 11.9834 0 12.3676C0 12.7519 0.314407 13.0663 0.698683 13.0663H22.5675C22.9517 13.0663 23.2662 12.7519 23.2662 12.3676C23.2662 11.9834 22.9517 11.6689 22.5675 11.6689Z"
                            ></path>
                            <path
                                d="M10.5501 17.4678H0.698683C0.314407 17.4678 0 17.7822 0 18.1665C0 18.5507 0.314407 18.8651 0.698683 18.8651H10.5501C10.9344 18.8651 11.2488 18.5507 11.2488 18.1665C11.2488 17.7822 10.9344 17.4678 10.5501 17.4678Z"
                            ></path></svg></span
                                                ><span
                                                    class="v-icon vpop2"
                                                    data-type="youtube"
                                                    data-id="6xcG6ttMDVY"
                                                    data-autoplay="true"
                                                >
                          <svg
                              viewBox="0 0 19 24"
                              xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                                d="M9.5 12C11.0111 12 12.3197 11.4087 13.3888 10.2421C14.458 9.07574 15 7.64858 15 5.99981C15 4.35161 14.458 2.92426 13.3887 1.75748C12.3193 0.591276 11.011 0 9.5 0C7.98868 0 6.68049 0.591276 5.61132 1.75767C4.54216 2.92407 4 4.35142 4 5.99981C4 7.64858 4.54216 9.07593 5.6115 10.2423C6.68084 11.4085 7.9892 12 9.5 12Z"
                            ></path>
                            <path
                                d="M18.954 18.6367C18.9232 18.1844 18.861 17.691 18.7694 17.17C18.677 16.645 18.558 16.1488 18.4155 15.6953C18.2683 15.2265 18.0682 14.7636 17.8208 14.32C17.564 13.8595 17.2623 13.4586 16.9239 13.1286C16.57 12.7835 16.1366 12.506 15.6356 12.3035C15.1362 12.1022 14.5828 12.0002 13.9909 12.0002C13.7584 12.0002 13.5336 12.0974 13.0994 12.3855C12.8321 12.5632 12.5196 12.7686 12.1707 12.9958C11.8724 13.1896 11.4682 13.3711 10.969 13.5354C10.482 13.696 9.98754 13.7775 9.49948 13.7775C9.01142 13.7775 8.51711 13.696 8.02957 13.5354C7.53092 13.3713 7.12678 13.1897 6.8288 12.996C6.48322 12.7709 6.17047 12.5655 5.89925 12.3854C5.46558 12.0972 5.24058 12 5.0081 12C4.41597 12 3.86276 12.1022 3.36358 12.3037C2.86284 12.5058 2.42934 12.7833 2.07507 13.1288C1.73678 13.4589 1.43498 13.8597 1.17853 14.32C0.931287 14.7636 0.73113 15.2263 0.583792 15.6955C0.441493 16.149 0.322476 16.645 0.230042 17.17C0.138477 17.6903 0.0762752 18.1838 0.0455219 18.6372C0.0152898 19.0813 0 19.5423 0 20.0079C0 21.2196 0.377901 22.2005 1.1231 22.924C1.8591 23.6378 2.83296 24 4.01722 24H14.9828C16.167 24 17.1406 23.638 17.8767 22.924C18.6221 22.2011 19 21.22 19 20.0077C18.9998 19.54 18.9844 19.0787 18.954 18.6367Z"
                            ></path></svg
                          ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="detelsuser">
                                <div class="w-100">
                                    <div class="contentpopup">
                                        <div class="popup-close">
                                            <svg
                                                width="16"
                                                height="16"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M2.40039 2.40039L21.6004 21.6004"
                                                    stroke="#000"
                                                    stroke-width="1.2"
                                                    stroke-miterlimit="10"
                                                    stroke-linecap="round"
                                                ></path>
                                                <path
                                                    d="M21.6016 2.40039L2.40156 21.6004"
                                                    stroke="#000"
                                                    stroke-width="1.2"
                                                    stroke-miterlimit="10"
                                                    stroke-linecap="round"
                                                ></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <h3 class="title">{{ $team->name }}</h3>
                                            <span class="position">{{ $team->position }}</span>
                                            <div class="scroll">
                                                <div class="innercontent">
                                                    <h4 class="title">About</h4>
                                                    <p class="textlight">
                                                        {{ $team->about }}
                                                    </p>
                                                </div>
                                                <div class="innercontent">
                                                    <h4 class="title">education</h4>
                                                    <p class="textlight">
                                                        {{ $team->education }}
                                                    </p>
                                                </div>
                                                <div class="innercontent">
                                                    <h4 class="title">Work Experience</h4>
                                                    <p class="textlight">
                                                        {{ $team->experiance }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="photo" href="profile.html"
                                        ><img src="{{ asset("uploads/$team->img") }}" alt="" title=""
                                            /></a>
                                    </div>
                                    <div class="textcenter m-0">
                                        <!--a(href="teams.html" class="bottom") #[span See All Team]    -->
                                    </div>
                                </div>
                            </div>
                            <!-- End detelsuser-->
                            <div id="video-popup-overlay">
                                <div id="video-popup-container">
                                    <div class="popup-close" id="video-popup-close">
                                        <svg
                                            width="16"
                                            height="16"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M2.40039 2.40039L21.6004 21.6004"
                                                stroke-width="1.2"
                                                stroke-miterlimit="10"
                                                stroke-linecap="round"
                                            ></path>
                                            <path
                                                d="M21.6016 2.40039L2.40156 21.6004"
                                                stroke-width="1.2"
                                                stroke-miterlimit="10"
                                                stroke-linecap="round"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div class="w-100">
                                        <div id="video-popup-iframe-container">
                                            <video
                                                id="video-popup-iframe"
                                                src="{{ asset("uploads/$team->video") }}"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                frameborder="0"
                                            ></video>
                                            <div class="textcenter m-0">
                                                <a class="bottom" href="aboutus.html"
                                                ><span>See All Team</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End video-popup-overlay-->
                            <div id="video-popup-overlay2">
                                <div id="video-popup-container2">
                                    <div class="popup-close" id="video-popup-close">
                                        <svg
                                            width="16"
                                            height="16"
                                            viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M2.40039 2.40039L21.6004 21.6004"
                                                stroke-width="1.2"
                                                stroke-miterlimit="10"
                                                stroke-linecap="round"
                                            ></path>
                                            <path
                                                d="M21.6016 2.40039L2.40156 21.6004"
                                                stroke-width="1.2"
                                                stroke-miterlimit="10"
                                                stroke-linecap="round"
                                            ></path>
                                        </svg>
                                    </div>
                                    <div id="video-popup-iframe-container2">
                                        <video
                                            id="video-popup-iframe2"
                                            src=""
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            frameborder="0"
                                        ></video>
                                    </div>
                                </div>
                                <div class="contentpopup">
                                    <div>
                                        <h3 class="title">{{ $team->name }}</h3>
                                        <span class="position">{{ $team->position }}</span>
                                        <div class="scroll">
                                            <div class="innercontent">
                                                <h4 class="title">About</h4>
                                                <p class="textlight">
                                                    {{ $team->about }}
                                                </p>
                                            </div>
                                            <div class="innercontent">
                                                <h4 class="title">education</h4>
                                                <p class="textlight">
                                                    {{ $team->education }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="photo" href="{{ url("/team/$team->id") }}"
                                    ><img src="{{ asset("uploads/$team->img") }}" alt="" title=""
                                        /></a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-sm-3 item wow fadeInUp" data-wow-duration="1s">
                            <div class="inner">
                                <a class="photo" href="profile.html"
                                ><img src="{{ asset("uploads/$team->img") }}" alt="" title=""
                                    /></a>
                                <div class="content">
                                    <h3 class="title">{{ $team->name }}</h3>
                                    <span class="position">{{ $team->position }}</span>
                                    <p class="textlight">
                                            <?php echo $team->description ?>
                                    </p>
                                    <!--div.btns
                                    a(href="profile.html" class="see")
                                    | See Profile
                                    svg(xmlns="http://www.w3.org/2000/svg"   viewBox="0 0 11 14")
                                      path(d="M1.5 2.66987L9 7L1.5 11.3301L1.5 2.66987Z" stroke-width="2")
                                    -->
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
            <div class="textcenter m-0 wow fadeInUp" data-wow-duration="1s">
                <a class="bottom" href="aboutus.html"><span>See All Team</span> </a>
            </div>
        </div>
    </section>
    <!-- End minteams-->

    <!--End minteams-->
    <section class="contactus">
        <div class="container">
            <h2 class="title bord-bot text-center wow fadeInUp" data-wow-delay="2s"> Fuel Your Brand’s Goals with <span>With Us.</span>
            </h2>
            <div class="row">
                <div class="col-sm-4 item wow fadeInLeft" data-wow-delay="1s">
                    <div class="photo"><img src="{{ asset("web/images/contactus.jpg") }}" alt="" title=""></div>
                </div>
                <div class="col-sm-8 item wow fadeInRight" data-wow-delay="1s">
                    <form action="{{ url('/brandgoals/create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 inpusrach">
                                <input class="form-control" type="text" placeholder="" autocomplete="off" required
                                       name="name">
                                <label class="floating-label">Name</label>
                            </div>
                            <div class="col-sm-6 inpusrach">
                                <input class="form-control" type="text" placeholder="" autocomplete="off" required
                                       name="budget">
                                <label class="floating-label">Budget (option)</label>
                            </div>
                            <div class="col-sm-6 inpusrach">
                                <input class="form-control" type="text" placeholder="" autocomplete="off" required
                                       name="email">
                                <label class="floating-label">Email Address </label>
                            </div>
                            <div class="col-sm-6 inpusrach">
                                <input class="form-control" type="text" placeholder="" autocomplete="off" required
                                       name="goals">
                                <label class="floating-label">Goals (option)</label>
                            </div>
                            <div class="col-sm-6 inpusrach">
                                <input class="form-control" type="text" placeholder="" autocomplete="off" required
                                       name="phone">
                                <label class="floating-label">Phone Number </label>
                            </div>
                            <div class="col-sm-6 inpusrach">
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
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('web/js/video.js') }}"></script>
@endsection
