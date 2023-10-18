<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karem Admin panal.">
    <meta name="keywords" content="Ahmed karem is the best">
    <meta name="author" content="Ahmed karem">
    <link rel="icon" href="{{ asset('admin/assets/images/logo/favicon-icon.png" type="image/x-icon')}}">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/logo/favicon-icon.png" type="image/x-icon')}}">
    <title>Admin Dashboard </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/font-awesome.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/date-picker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/photoswipe.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{ asset('admin/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/simple-mde.css')}}">

</head>
<body>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="loader">
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-bar"></div>
        <div class="loader-ball"></div>
    </div>
</div>
<!-- Loader ends-->
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper">
                    <a href="{{ url('/dashboard') }}"><img class="img-fluid" src="{{ asset('admin/assets/images/logo/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="left-side-header col ps-0 d-none d-md-block"></div>
            <div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
                <ul class="nav-menus">
                    <li>
                        <div class="mode animated backOutRight">
                            <svg class="lighticon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M18.1377 13.7902C19.2217 14.8742 16.3477 21.0542 10.6517 21.0542C6.39771 21.0542 2.94971 17.6062 2.94971 13.3532C2.94971 8.05317 8.17871 4.66317 9.67771 6.16217C10.5407 7.02517 9.56871 11.0862 11.1167 12.6352C12.6647 14.1842 17.0537 12.7062 18.1377 13.7902Z"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                            <svg class="darkicon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"></path>
                                <path d="M18.3117 5.68834L18.4286 5.57143M5.57144 18.4286L5.68832 18.3117M12 3.07394V3M12 21V20.9261M3.07394 12H3M21 12H20.9261M5.68831 5.68834L5.5714 5.57143M18.4286 18.4286L18.3117 18.3117"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </li>
                    <li class="d-md-none resp-serch-input">
                        <div class="resp-serch-box"><i data-feather="search"></i></div>
                        <div class="form-group search-form">
                            <input type="text" placeholder="Search here...">
                        </div>
                    </li>
                    <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path d="M2.99609 8.71995C3.56609 5.23995 5.28609 3.51995 8.76609 2.94995"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path d="M8.76616 20.99C5.28616 20.41 3.56616 18.7 2.99616 15.22L2.99516 15.224C2.87416 14.504 2.80516 13.694 2.78516 12.804"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path d="M21.2446 12.804C21.2246 13.694 21.1546 14.504 21.0346 15.224L21.0366 15.22C20.4656 18.7 18.7456 20.41 15.2656 20.99"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path d="M15.2661 2.94995C18.7461 3.51995 20.4661 5.23995 21.0361 8.71995"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                        </a></li>
                    <li class="profile-nav onhover-dropdown pe-0 py-0 me-0">
                        <div class="media profile-media">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M9.55851 21.4562C5.88651 21.4562 2.74951 20.9012 2.74951 18.6772C2.74951 16.4532 5.86651 14.4492 9.55851 14.4492C13.2305 14.4492 16.3665 16.4342 16.3665 18.6572C16.3665 20.8802 13.2505 21.4562 9.55851 21.4562Z"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M9.55849 11.2776C11.9685 11.2776 13.9225 9.32356 13.9225 6.91356C13.9225 4.50356 11.9685 2.54956 9.55849 2.54956C7.14849 2.54956 5.19449 4.50356 5.19449 6.91356C5.18549 9.31556 7.12649 11.2696 9.52749 11.2776H9.55849Z"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path d="M16.8013 10.0789C18.2043 9.70388 19.2383 8.42488 19.2383 6.90288C19.2393 5.31488 18.1123 3.98888 16.6143 3.68188"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path d="M17.4608 13.6536C19.4488 13.6536 21.1468 15.0016 21.1468 16.2046C21.1468 16.9136 20.5618 17.6416 19.6718 17.8506"
                                              stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
                            <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a>
                            </li>
                            <li>
                                <form method="post" action="{{ url('/logout') }}">
                                    @csrf
                                    <input type="submit" value="logout">
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper">
                    <a href="index.html">
                        <img class="img-fluid for-light" src="{{ asset('admin/assets/images/logo/small-logo.png')}}" alt="">
                        <img class="img-fluid for-dark" src="{{ asset('admin/assets/images/logo/small-white-logo.png')}}" alt="">
                    </a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="index.html">
                        <img class="img-fluid" src="{{ asset('admin/assets/images/logo-icon.png')}}" alt="">
                    </a>
                </div>
                <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow">
                <i data-feather="arrow-left"></i>
              </div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn">
                    <a href="{{ url("/dashboard") }}">
                      <img
                        class="img-fluid"
                        src="assets/images/logo-icon.png"
                        alt=""
                      />
                    </a>
                    <div class="mobile-back text-end">
                      <span>Back</span>
                      <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                    </div>
                  </li>
                  <li class="sidebar-list">
                    <a
                      class="sidebar-link sidebar-title link-nav"
                      href="{{ url("/dashboard") }}"
                    >
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g>
                          <g>
                            <path
                              d="M7.30566 14.5743H16.8987"
                              stroke="#130F26"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z"
                              stroke="#130F26"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                          </g>
                        </g>
                      </svg>
                      <span>Dashboard</span></a
                    >
                  </li>

                  <!-- Start English Data -->
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                      <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <g>
                          <g>
                            <path
                              d="M11.1437 17.8829H4.67114"
                              stroke="#130F26"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M15.205 17.8839C15.205 19.9257 15.8859 20.6057 17.9267 20.6057C19.9676 20.6057 20.6485 19.9257 20.6485 17.8839C20.6485 15.8421 19.9676 15.1621 17.9267 15.1621C15.8859 15.1621 15.205 15.8421 15.205 17.8839Z"
                              stroke="#130F26"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                            <path
                              d="M14.1765 7.39439H20.6481"
                              stroke="#130F26"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                            <path
                              fill-rule="evenodd"
                              clip-rule="evenodd"
                              d="M10.1153 7.39293C10.1153 5.35204 9.43436 4.67114 7.39346 4.67114C5.35167 4.67114 4.67078 5.35204 4.67078 7.39293C4.67078 9.43472 5.35167 10.1147 7.39346 10.1147C9.43436 10.1147 10.1153 9.43472 10.1153 7.39293Z"
                              stroke="#130F26"
                              stroke-width="1.5"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            ></path>
                          </g>
                        </g>
                      </svg>
                      <span>Englsih</span>
                    </a>
                    <ul class="sidebar-submenu">
                      <li><a href="{{ url("dashboard/homepage") }}">Home</a></li>
                      <li><a href="{{ url("dashboard/aboutpage") }}">About</a></li>
                      <li>
                        <a class="submenu-title" href="#"
                          >Services<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/servicepage") }}">Service Page</a></li>
                          <li>
                            <a href="{{ url("dashboard/servics/create") }}">Create New</a>
                          </li>
                          <li>
                            <a href="{{ url("dashboard/servics") }}">Services List</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >Blogs<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/blogpage") }}">Blog Page</a></li>
                          <li>
                            <a href="{{ url("dashboard/blogs/create") }}">Create New</a>
                          </li>
                          <li>
                            <a href="{{ url("dashboard/blogs") }}">Blogs List</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >Hiring<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/hiringpage") }}">Hiring Page</a></li>
                          <li>
                            <a href="{{ url("dashboard/hirings/create") }}">Create New</a>
                          </li>
                          <li>
                            <a href="{{ url("dashboard/hirings") }}">Hiring List</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >Contact<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/contactpage") }}">Contact Page</a></li>
                          <li>
                            <a href="{{ url("dashboard/contactmessages") }}">Contact Messages</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >Pricing Plans<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/pricingpage") }}">Pricing Plans Page</a></li>
                          <li>
                            <a href="{{ url("dashboard/socialplans/create") }}">Create New Pricing Social Plan</a>
                          </li>
                          <li>
                            <a href="{{ url("dashboard/socialplans") }}">Pricing Social Plan List</a>
                          </li>
                          <li>
                            <a href="{{ url("dashboard/socialplansfeatures/create") }}">Create New Pricing Social Plan Feature</a>
                          </li>
                          <li>
                            <a href="{{ url("dashboard/socialplansfeatures") }}">Pricing Social Plan Features List</a>
                          </li>
                          <li>
                            <a href="{{ url("dashboard/addfeature") }}">Integrated Social Plan Features List</a>
                          </li>
                          <li>
                            <a href="{{ url("dashboard/otherplans/create") }}">Create New Other Pricing Plan</a>
                          </li>
                          <li>
                            <a href="{{ url("dashboard/otherplans") }}">Other Pricing Plan List</a>
                          </li>
                          <li>
                            <a href="{{ url("dashboard/otherplansfeatures/create") }}">Create New Other Feature Pricing Plan</a>
                          </li>
                          <li>
                            <a href="{{ url("dashboard/otherplansfeatures") }}">Other Feature Pricing Plan List</a>
                          </li>
                          <li>
                            <a href="{{ url("dashboard/planrequest") }}">Pricing Plan Reqests</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >Clients<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/clients/create") }}">Create New</a></li>
                          <li>
                            <a href="{{ url("dashboard/clients") }}">Clients List</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >Team<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/team/create") }}">Create New</a></li>
                          <li>
                            <a href="{{ url("dashboard/team") }}">Team List</a>
                          </li>
                        </ul>
                      </li>
                        <li>
                            <a class="submenu-title" href="#"
                            >Best Of the month<span class="sub-arrow"
                                ><i class="fa fa-angle-right"></i></span
                                ></a>
                            <ul class="nav-sub-childmenu submenu-content">
                                <li><a href="{{ url("dashboard/bestofthemonth/create") }}">Create New</a></li>
                                <li>
                                    <a href="{{ url("dashboard/bestofthemonth") }}">months List</a>
                                </li>
                            </ul>
                        </li>
                        <li>

                        <h4 style="color: black">Portfolio</h4>
                      <li>
                        <a class="submenu-title" href="#"
                          >Branding<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/brandingpage") }}">Branding Page</a></li>
                          <li><a href="{{ url("dashboard/brandings/create") }}">Create New</a></li>
                          <li>
                            <a href="{{ url("dashboard/brandings") }}">Branding List</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >Media Production<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/motionpage") }}">Media Production Page</a></li>
                          <li><a href="{{ url("dashboard/motions/create") }}">Create New</a></li>
                          <li>
                            <a href="{{ url("dashboard/motions") }}">List</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >Voiceover<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/voicepage") }}">Voiceover Page</a></li>
                          <li><a href="{{ url("dashboard/voices/create") }}">Create New</a></li>
                          <li>
                            <a href="{{ url("dashboard/voices") }}">Voiceover List</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >SocialMedia<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/socialmediapage") }}">SocialMedia Page</a></li>
                          <li><a href="{{ url("dashboard/socialmedias/create") }}">Create New</a></li>
                          <li>
                            <a href="{{ url("dashboard/socialmedias") }}">SocialMedia List</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >Websites & Mobiles<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/websitepage") }}">Websites Page</a></li>
                          <li><a href="{{ url("dashboard/websites/create") }}">Create New</a></li>
                          <li>
                            <a href="{{ url("dashboard/websites") }}">Websites List</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >SEO<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/seopage") }}">SEO Page</a></li>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >SEM<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/sempage") }}">SEM Page</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="submenu-title" href="#"
                          >Setting<span class="sub-arrow"
                            ><i class="fa fa-angle-right"></i></span
                        ></a>
                        <ul class="nav-sub-childmenu submenu-content">
                          <li><a href="{{ url("dashboard/setting") }}">Setting</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- End English Data -->
                </ul>
                <div class="sidebar-img-section">
                  <div class="sidebar-img-content">
                    <img class="img-fluid" src="{{ asset('admin/assets/images/side-bar.png')}}" alt="">
                    <h4>Need Help ?</h4>
                    <a class="txt" href="#"
                      >Raise ticket at "ahmedkaremalex@gmail.com"</a
                    >
                    <a class="btn btn-secondary" href="#">Good Luck</a>
                  </div>
                </div>
              </div>
              <div class="right-arrow" id="right-arrow">
                <i data-feather="arrow-right"></i>
              </div>
            </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        @yield('main');
    </div>
</div>
<!-- Container-fluid Ends-->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2022 © Ahmed Karem </p>
            </div>
        </div>
    </div>
</footer>
<!-- latest jquery-->
<script src="{{ asset('admin/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{ asset('admin/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<script src="{{ asset('admin/assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{ asset('admin/assets/js/scrollbar/custom.js')}}"></script>
<script src="{{ asset('admin/assets/js/config.js')}}"></script>
<script src="{{ asset('admin/assets/js/sidebar-menu.js')}}"></script>
<script src="{{ asset('admin/assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{ asset('admin/assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{ asset('admin/assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{ asset('admin/assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{ asset('admin/assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{ asset('admin/assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{ asset('admin/assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{ asset('admin/assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{ asset('admin/assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{ asset('admin/assets/js/typeahead-search/typeahead-custom.js')}}"></script>

<script src="{{ asset('admin/assets/js/script.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/4/tinymce.min.js"></script>

<script>
    tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });

</script>

</body>
</html>
