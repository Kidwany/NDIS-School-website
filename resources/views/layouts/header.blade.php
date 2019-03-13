<header class="header-area">
    <div class="header-top bg-img" style="background-image:url({{asset('website/img/icon-img/header-shape.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i> (+2) 33632038  </li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">info@ndbischool.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                    <div class="login-register">
                        <ul>
                           {{-- <li><a href="login-register.html">Login</a></li>--}}

                            {{--<li><a href="{{url('signin')}}">Login</a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="headerbottom" class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 col-4">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img alt="" src="{{asset('website/img/logo/logo.png')}}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{url('/')}}"> HOME </a>
                                        {{--<ul class="submenu">
                                            <li><a href="index.html">home version 1</a></li>
                                            <li><a href="index-2.html">home version 2</a></li>
                                            <li><a href="index-3.html">home version 3</a></li>
                                        </ul>--}}
                                    </li>
                                    <li><a href="{{url('/about')}}"> ABOUT <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu" style="width: 250px">
                                            <li><a href="{{url('owner')}}">Owner & Directors</a></li>
                                            <li><a href="{{url('about')}}" style="color: #00a550; font-weight: 500">OUR LEARNING APPROACH</a></li>
                                            <li><a href="{{url('about')}}" style="padding-left: 10px">Why British ?</a></li>
                                            <li><a href="{{url('about')}}" style="padding-left: 10px">Why American ?</a></li>
                                            <li><a href="{{url('calendar')}}">Accreditation</a></li>
                                            <li><a href="{{url('about#mission')}}">School Campus</a></li>
                                            {{--<li><a href="event.html">event page</a></li>
                                            <li><a href="shop.html">shop page</a></li>
                                            <li><a href="course-details.html">course details</a></li>
                                            <li><a href="event-details.html">event details</a></li>
                                            <li><a href="single-product.html">single product</a></li>
                                            <li><a href="cart.html">cart page</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="login-register.html">login / register</a></li>--}}
                                        </ul>
                                    </li>


                                    <li>
                                        <a href="{{url('/education')}}"> CURRICULUM <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu" style="width: 300px">
                                            <li><a href="#" style="color: #00a550; font-weight: 500">BRITISH SECTOR</a></li>
                                            <li><a href="{{url('/academics')}}" style="padding-left: 10px">Foundation Stage PRE-F / FS1 / FS2</a></li>
                                            <li><a onclick="opencol('#stage1')" href="{{url('/british-sector')}}#stage1" style="padding-left: 10px">Key Stage 1 & 2 (Year 1-6)</a></li>
                                            <li><a onclick="opencol('#stage3')" href="{{url('/british-sector')}}#stage3" style="padding-left: 10px">Key Stage 3 (Year 7-9)</a></li>
                                            <li><a onclick="opencol('#stage4')" href="{{url('/british-sector')}}#stage4" style="padding-left: 10px">Key Stage 4 (Year 10-11)</a></li>
                                            <li><a onclick="opencol('#stage5')" href="{{url('/british-sector')}}#stage5" style="padding-left: 10px">Key Stage 5 (Year 12)</a></li>
                                            <li><a href="#" style="color: #00a550; font-weight: 500">AMERICAN SECTOR</a></li>
                                            <li><a href="{{url('/american-sector')}}" style="padding-left: 10px">Elementary School Grades 1-5</a></li>
                                            <li><a href="{{url('/american-sector')}}" style="padding-left: 10px">Middle School Grades 6-8</a></li>
                                            <li><a href="{{url('/american-sector')}}" style="padding-left: 10px">High School Grades 9-12</a></li>
                                        </ul>
                                    </li>


                                    <li>
                                        <a href="{{url('/school-life')}}"> SCHOOL LIFE  </a>
                                        <ul class="submenu">
                                            <li><a href="{{url('/calendar')}}">School Calendar</a></li>
                                            <li><a href="{{url('/school-life')}}">Facilities</a></li>
                                            <li><a href="{{url('/school-life')}}">Co-Curricular Activities</a></li>
                                            <li><a href="{{url('/rules')}}">School Rules</a></li>
                                        </ul>
                                    </li>


                                    <li>
                                        <a href="{{url('/admission')}}"> ADMISSION  <i class="fa fa-angle-down"></i> </a>
                                        <ul class="submenu">
                                            <li><a href="{{url('how-to-apply')}}">How To Apply</a></li>
                                            <li><a href="{{url('/fees-guide')}}">Fess Guide</a></li>
                                            <li><a href="{{url('/required-documents')}}">Required Docs</a></li>
                                            <li><a href="{{url('/admission')}}">Apply Online</a></li>
                                            <li><a href="{{url('/application-track')}}">Track Your Application</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{url('/careers')}}"> CAREERS </a>
                                    </li>

                                    <li>
                                        <a href="{{url('contact')}}"> CONTACT </a>
                                    </li>
                                    {{--<li class="mega-menu-position top-hover"><a href="shop.html"> SHOP <i class="fa fa-angle-down"></i> </a>
                                        <ul class="mega-menu">
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Categories 01</a></li>
                                                    <li><a href="shop.html">bag</a></li>
                                                    <li><a href="shop.html">Pen</a></li>
                                                    <li><a href="shop.html">Erasers</a></li>
                                                    <li><a href="shop.html">Glue sticks</a></li>
                                                    <li><a href="shop.html">Lunchbox </a></li>
                                                    <li><a href="shop.html">Pencil box </a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Categories 02</a></li>
                                                    <li><a href="shop.html">bag</a></li>
                                                    <li><a href="shop.html">Pen</a></li>
                                                    <li><a href="shop.html">Erasers</a></li>
                                                    <li><a href="shop.html">Glue sticks</a></li>
                                                    <li><a href="shop.html">Lunchbox </a></li>
                                                    <li><a href="shop.html">Pencil box </a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Categories 03</a></li>
                                                    <li><a href="shop.html">bag</a></li>
                                                    <li><a href="shop.html">Pen</a></li>
                                                    <li><a href="shop.html">Erasers</a></li>
                                                    <li><a href="shop.html">Glue sticks</a></li>
                                                    <li><a href="shop.html">Lunchbox </a></li>
                                                    <li><a href="shop.html">Pencil box </a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="mega-menu-title"><a href="#">Categories 04</a></li>
                                                    <li><a href="shop.html">bag</a></li>
                                                    <li><a href="shop.html">Pen</a></li>
                                                    <li><a href="shop.html">Erasers</a></li>
                                                    <li><a href="shop.html">Glue sticks</a></li>
                                                    <li><a href="shop.html">Lunchbox </a></li>
                                                    <li><a href="shop.html">Pencil box </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>--}}

                                </ul>
                            </nav>
                        </div>
                        {{--<div class="cart-search-wrap">
                            <div class="cart-wrap">
                                <button class="icon-cart">
                                    <i class="fa fa-cart-plus"></i>
                                    <span class="count-style">02</span>
                                </button>
                                <div class="shopping-cart-content">
                                    <ul>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="" src="{{asset('website/img/cart/cart-1.png')}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="#">Color Box </a></h4>
                                                <h6>Qty: 02</h6>
                                                <span>$260.00</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fa fa-times-circle"></i></a>
                                            </div>
                                        </li>
                                        <li class="single-shopping-cart">
                                            <div class="shopping-cart-img">
                                                <a href="#"><img alt="" src="{{asset('website/img/cart/cart-2.png')}}"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="#">Color Box </a></h4>
                                                <h6>Qty: 02</h6>
                                                <span>$260.00</span>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fa fa-times-circle"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-total">
                                        <h4>Shipping : <span>$20.00</span></h4>
                                        <h4>Total : <span class="shop-total">$260.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn">
                                        <a class="default-btn btn-hover" href="cart.html">view cart</a>
                                        <a class="default-btn btn-hover" href="checkout.html">checkout</a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-search">
                                <button class="search-toggle">
                                    <i class="fa fa-search"></i>
                                </button>
                                <div class="search-content">
                                    <form action="#">
                                        <input type="text" placeholder="Search">
                                        <button>
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul class="menu-overflow">

                            <li><a href="{{url('/')}}"> HOME </a>
                            </li>

                            <li><a href="{{url('/about')}}"> ABOUT <i class="fa fa-angle-down"></i> </a>
                                <ul class="submenu">
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="{{url('calendar')}}">School Calendar2</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{url('/admission')}}"> ADMISSION  <i class="fa fa-angle-down"></i> </a>
                                <ul class="submenu">
                                    <li><a href="{{url('how-to-apply')}}">How To Apply</a></li>
                                    <li><a href="{{url('/fees-guide')}}">Fess Guide</a></li>
                                    <li><a href="{{url('/required-documents')}}">Required Docs</a></li>
                                    <li><a href="{{url('/admission')}}">Online Application</a></li>
                                    <li><a href="{{url('/application-track')}}">Track Your Application</a></li>
                                    {{--<li><a href="#">Schedule a Visit</a></li>--}}
                                </ul>
                            </li>

                            <li>
                                <a href="{{url('/academics')}}"> ACADEMICS  <i class="fa fa-angle-down"></i> </a>
                                <ul class="submenu">
                                    <li><a href="{{url('/academics')}}">Foundation Stage</a></li>
                                    <li><a href="#">Junior</a></li>
                                    <li><a href="#">Senior</a></li>
                                </ul>
                            </li>
                            {{--<li class="mega-menu-position top-hover"><a href="shop.html"> SHOP <i class="fa fa-angle-down"></i> </a>
                                <ul class="mega-menu">
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Categories 01</a></li>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Categories 02</a></li>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Categories 03</a></li>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li class="mega-menu-title"><a href="#">Categories 04</a></li>
                                            <li><a href="shop.html">bag</a></li>
                                            <li><a href="shop.html">Pen</a></li>
                                            <li><a href="shop.html">Erasers</a></li>
                                            <li><a href="shop.html">Glue sticks</a></li>
                                            <li><a href="shop.html">Lunchbox </a></li>
                                            <li><a href="shop.html">Pencil box </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>--}}
                            <li>
                                <a href="{{url('/school-life')}}"> SCHOOL LIFE  </a>
                                <ul class="submenu">
                                    <li><a href="{{url('/school-life')}}">Facilities</a></li>
                                    <li><a href="{{url('/rules')}}">School Rules</a></li>
                                    {{--<li><a href="{{url('/fees-guide')}}">Fess Guide</a></li>
                                    <li><a href="{{url('/required-documents')}}">Required Docs</a></li>
                                    <li><a href="{{url('/admission')}}">Online Application</a></li>--}}
                                </ul>
                            </li>

                            <li><a href="{{url('/about')}}"> ABOUT <i class="fa fa-angle-down"></i> </a>
                                {{--<ul class="submenu">
                                    <li><a href="course.html">course page</a></li>
                                    <li><a href="event.html">event page</a></li>
                                    <li><a href="shop.html">shop page</a></li>
                                    <li><a href="course-details.html">course details</a></li>
                                    <li><a href="event-details.html">event details</a></li>
                                    <li><a href="single-product.html">single product</a></li>
                                    <li><a href="cart.html">cart page</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="login-register.html">login / register</a></li>
                                </ul>--}}
                            </li>
                            {{--<li><a href="course.html"> COURSES / PROGRAMMES</a></li>--}}
                            <li><a href="{{url('blog')}}"> BLOG </a>

                            </li>
                            <li><a href="{{url('contact')}}"> CONTACT </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
