@extends('includes.headers')
@section('content')

    <!-- home start -->
    <div class="upper-page bg-dark" id="home">
        <!-- hero bg start -->
        <div class="hero-fullscreen">
            <div class="hero-fullscreen-FIX">
                <div class="hero-bg">
                    <!-- hero slider wrapper start -->
                    <div class="swiper-container-wrapper">
                        <!-- swiper container start -->
                        <div class="swiper-container swiper2">
                            <!-- swiper wrapper start -->
                            <div class="swiper-wrapper">
                                <!-- swiper slider item start -->
                                <div class="swiper-slide">
                                    <div class="swiper-slide-inner">
                                        <!-- swiper slider item IMG start -->
                                        <div class="swiper-slide-inner-bg booking-bg overlay overlay-dark">
                                        </div>
                                        <!-- swiper slider item IMG end -->
                                        <!-- swiper slider item txt start -->
                                        <div class="swiper-slide-inner-txt-2">
                                            <!-- section subtitle start -->
                                            <div class="star-wrapper fadeIn-element">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                            </div>
                                            <!-- section subtitle end -->
                                            <!-- divider start -->
                                            <div class="divider-m"></div>
                                            <!-- divider end -->
                                            <!-- section title start -->
                                            <h1 class="hero-heading hero-heading-home fadeIn-element">
                                                Reservations
                                            </h1>
                                            <!-- section title end -->
                                            <!-- divider start -->
                                            <div class="divider-m"></div>
                                            <!-- divider end -->
                                            <!-- button start -->
                                            <div class="more-wraper-center more-wraper-center-home fadeIn-element">
                                                <a class="button button-effect" href="#reservation-form-wrapper">
                                                    <div class="more-wraper-inner-home">
                                                        <i class="pulse"></i>
                                                        <div class="more-button-txt-center more-button-txt-center-home">
                                                            <span>Book now</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- button end -->
                                        </div>
                                        <!-- swiper slider item txt end -->
                                    </div>
                                </div>
                                <!-- swiper slider item end -->
                            </div>
                            <!-- swiper wrapper end -->
                        </div>
                        <!-- swiper container end -->
                    </div>
                    <!-- hero slider wrapper end -->
                </div>
            </div>
        </div>
        <!-- hero bg end -->
        <!-- scroll indicator start -->
        <div class="scroll-indicator">
            <div class="scroll-indicator-wrapper">
                <div class="scroll-line fadeIn-element"></div>
            </div>
        </div>
        <!-- scroll indicator end -->
    </div>
    <!-- home end -->
    <!-- separator start -->
    <div class="section-all bg-dark" id="reservation-form-wrapper">
        <!-- container start -->
        <div class="container-fluid nopadding nopadding-xs">
            <div class="extra-margin-container">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- divider start -->
                        <div class="divider-l visible-mobile-devices-2"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
        </div>
        <!-- container end -->
    </div>
    <!-- separator end -->
    <!-- reservation form wrapper start -->
    <div class="reservation-form-wrapper">
        <!-- reservation form start -->
        <div class="reservation-wrapper">
            <!-- container start -->
            <div class="container">
                <div class="extra-margin-container">
                    <div class="reservation-inner clearfix">
                        <form action="reservation.php" id="form-2" method="post" name="send">
                            <div class="col-1 c-1">
                                <div class="input-wrapper">
                                    <label>Check-In</label>
                                    <div class="input-inner">
                                        <input class="requiredField-r checkin form-control input datepicker" id="checkin" name="checkin" placeholder="Check-In" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 c-2">
                                <div class="input-wrapper">
                                    <label>Check-Out</label>
                                    <div class="input-inner">
                                        <input class="requiredField-r checkout form-control input datepicker" id="checkout" name="checkout" placeholder="Check-Out" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 c-3">
                                <div class="input-wrapper">
                                    <label>Date</label>
                                    <div class="input-inner input-inner-email">
                                        <input class="requiredField-r email" id="email-r" name="email" placeholder="Email" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 c-4">
                                <div class="select-wrapper">
                                    <label>Time</label>
                                    <div class="select-inner">
                                        <select class="requiredField-r time select2 select" id="time" name="time">
                                            <option class="" value="" selected="selected">Time</option>
                                            <option value="10:00 a.m.">10:00 a.m.</option>
                                            <option value="11:00 a.m.">11:00 a.m.</option>
                                            <option value="12:00 p.m.">12:00 p.m.</option>
                                            <option value="1:00 p.m.">1:00 p.m.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 c-5">
                                <div class="select-wrapper">
                                    <label>Persons</label>
                                    <div class="select-inner">
                                        <select class="requiredField-r persons select2 select" id="persons" name="persons">
                                            <option value="" selected="selected">Persons</option>
                                            <option value="1 Person">1 Person</option>
                                            <option value="2 Persons">2 Persons</option>
                                            <option value="3 Persons">3 Persons</option>
                                            <option value="4 Persons">4 Persons</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 c-6">
                                <button type="submit" class="reservation-button">Book now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- container end -->
        </div>
        <!-- reservation form end -->
    </div>
    <!-- reservation form wrapper end -->
    <!-- vertical lines start -->
    <div class="vertical-lines-wrapper">
        <div class="vertical-lines"></div>
    </div>
    <!-- vertical lines end -->
    <!-- separator start -->
    <div class="section-all bg-dark">
        <!-- container start -->
        <div class="container-fluid nopadding nopadding-xs">
            <div class="extra-margin-container">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- line start -->
                        <div class="the-line"></div>
                        <!-- line end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
        </div>
        <!-- container end -->
    </div>
    <!-- separator end -->
    <!-- contact start -->
    <div id="contact" class="section-all bg-light">
        <!-- container start -->
        <div class="container-fluid">
            <!-- row start -->
            <div class="row">
                <!-- col start -->
                <div class="col-lg-12">
                    <!-- divider start -->
                    <div class="divider-l"></div>
                    <!-- divider end -->
                    <!-- line start -->
                    <div class="the-line"></div>
                    <!-- line end -->
                    <!-- divider start -->
                    <div class="divider-l"></div>
                    <!-- divider end -->
                </div>
                <!-- col end -->
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
        <!-- container start -->
        <div class="container">
            <!-- row start -->
            <div class="row">
                <div class="post-spacing-3">
                    <!-- col start -->
                    <div class="col-md-4 col-sm-12">
                        <!-- section subtitle start -->
                        <div class="blog-tag">The Address</div>
                        <!-- section subtitle end -->
                        <!-- divider start -->
                        <div class="divider-m"></div>
                        <!-- divider end -->
                        <!-- section TXT start -->
                        <div class="section-txt-2">
                            <p>
                                14 Jenner Close
                                Hospital hill,
                                Mutare,
                                Zimbabwe
                            </p>
                        </div>
                        <!-- section TXT end -->
                        <!-- divider start -->
                        <div class="divider-l visible-mobile-devices"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                    <!-- col start -->
                    <div class="col-md-4 col-sm-12">
                        <!-- section subtitle start -->
                        <div class="blog-tag">The Email</div>
                        <!-- section subtitle end -->
                        <!-- divider start -->
                        <div class="divider-m"></div>
                        <!-- divider end -->
                        <!-- section TXT start -->
                        <div class="section-txt-2">
                            <p>
                                <a class="link-effect" href="mailto:contact@domainname.com">reservations@enopathotel.co.zw</a>
                            </p>
                        </div>
                        <!-- section TXT end -->
                        <!-- divider start -->
                        <div class="divider-l visible-mobile-devices"></div>
                        <!-- divider end -->
                    </div>
                    <!-- col end -->
                    <!-- col start -->
                    <div class="col-md-4 col-sm-12">
                        <!-- section subtitle start -->
                        <div class="blog-tag">The Phone</div>
                        <!-- section subtitle end -->
                        <!-- divider start -->
                        <div class="divider-m"></div>
                        <!-- divider end -->
                        <!-- section TXT start -->
                        <div class="section-txt-2">
                            <p>+263 778661429</p>
                            <p>+263 778661543</p>
                        </div>
                        <!-- section TXT end -->
                    </div>
                    <!-- col end -->
                </div>
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </div>
    <!-- contact end -->
    <!-- container start -->
    <div class="container-fluid">
        <!-- row start -->
        <div class="row">
            <!-- col start -->
            <div class="col-lg-12">
                <!-- divider start -->
                <div class="divider-l"></div>
                <!-- divider end -->
                <!-- line start -->
                <div class="the-line"></div>
                <!-- line end -->
                <!-- divider start -->
                <div class="divider-l"></div>
                <!-- divider end -->
            </div>
            <!-- col end -->
        </div>
        <!-- row end -->
        <!-- row start -->
        <div class="row">
            <!-- col start -->
            <div class="col-lg-12">
                <!-- parallax wrapper start -->
                <div class="parallax-title">
                    <!-- HTML5 video URL start -->
                    <video playsinline autoplay muted loop>
                        <source src="https://www.11-76.com/html5-videos-22/luxex/luxex.mp4" type="video/mp4">
                    </video>
                    <!-- HTML5 video URL end -->
                    <!-- page title start -->
                    <div class="parallax-title-content">
                        Enopat<br>
                        Hotel
                    </div>
                    <!-- page title end -->
                </div>
                <!-- parallax wrapper end -->
            </div>
            <!-- col end -->
        </div>
        <!-- row end -->
    </div>

@endsection
