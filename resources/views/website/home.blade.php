@extends('website.layouts.website')
@section('title')
Trip U
@endsection

@section('content')
@if ($data['sliders'])
  <!-- Slider/Intro Section Start -->
  <div class="intro-slider-wrap section">
      <div class="intro-slider swiper-container">
        <div class="swiper-wrapper">
          @forelse ($data['sliders'] as $key => $slider)
          <div class="swiper-slide">
            <div class="intro-section section overlay" data-bg-color="#000" data-bg-image="{{ asset($slider->ImagePath()) }}">
              <div class="container">
                <div class="row row-cols-lg-1 row-cols-1">
                  <div class="col align-self-center">
                    <div class="intro-content mt-xl-8 mt-lg-8 mt-md-8 mt-sm-8 mt-xs-8">
                      <h2 class="title">{{ $slider?->title }}</h2>
                      <div class="desc">
                        <p>
                          {{ $slider?->description }}
                        </p>
                      </div>
                      <a href="#" class="btn btn-primary btn-hover-secondary">Get Started</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @empty
          <div class="swiper-slide">
            <div class="intro-section section overlay" data-bg-color="#000"
              data-bg-image="{{asset('assets/finshWebsite/images/default/default_slider.jpg')}}">
              <div class="container">
                <div class="row row-cols-lg-1 row-cols-1">
                  <div class="col align-self-center">
                    <div class="intro-content mt-xl-8 mt-lg-8 mt-md-8 mt-sm-8 mt-xs-8">
                      <h2 class="title">Let’s Rent Your Dream Car Here</h2>
                      <div class="desc">
                        <p>
                          We are the best car rental agency that will help you
                          find the car you have been dreaming of, let's find
                          it.
                        </p>
                      </div>
                      <a href="aboutUs_en.html" class="btn btn-primary btn-hover-secondary">Get Started</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforelse
        </div>
        <div class="home-slider-prev swiper-button-prev main-slider-nav">
          <i class="fal fa-angle-left"></i>
        </div>
        <div class="home-slider-next swiper-button-next main-slider-nav">
          <i class="fal fa-angle-right"></i>
        </div>
      </div>
  </div>
  <!-- Slider/Intro Section End -->
@endif
<!-- About Section Start -->
<div class="section section-padding">
    <div class="container">
      <!-- Section Title Start -->
      <div class="section-title text-center" data-aos="fade-up">
        <h2 class="title">A ride-hailing service that always suits you</h2>
      </div>
      <!-- Section Title End -->

      <!-- About Wrapper Start -->
      <div class="row">
        <!-- About Image Area Start -->
        <div class="col-xl-7 col-lg-6 col-12" style="display: flex; justify-content: center" data-aos="fade-up">
          <div class="about-image-area colflex">
            <div class="about-image img_stack js-tilt">
              <img src="{{asset('assets/finshWebsite/images/cars/driver1.jpg')}}" alt="" />
            </div>
          </div>
        </div>
        <!-- About Image Area Start -->

        <!-- About Start -->
        <div class="col-xl-5 col-lg-6 col-12" data-aos="fade-up">
          <!-- About Content Area Start -->
          <div class="about-content-area" style="margin-top: 20px">
            <!-- Section Title Two Start -->
            <div class="section-title-two">
              <span class="sub-title">Every day brings new challenges</span>
              <h3 class="title">
                An innovative company specializing in transportation
                services.
              </h3>
            </div>
            <!-- Section Title Two End -->

            <p>
              We are bold individualists, always original and refreshingly
              relaxed. Our vision, passion and ideas are aligned with focus,
              experience and artistic sense.
            </p>

            <a class="btn btn-primary btn-hover-secondary mt-xl-8 mt-lg-8 mt-md-6 mt-4" href="aboutUs_en.html">
              About Us</a>
          </div>
          <!-- About Content Area Start -->
        </div>
        <!-- About Start -->
      </div>
      <!-- About Wrapper End -->
    </div>
</div>
<!-- About Section End -->

<!-- Service Section Start -->
<div id="services" class="section section-padding-t110-b120" data-bg-color="#f8faff">
    <div class="container">
      <!-- Section Title Start -->
      <div class="section-title text-center mb-12" data-aos="fade-up">
        <h2 class="title">All Services we will provide you</h2>
      </div>
      <!-- Section Title End -->

      <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
        <!-- Icon Box Start -->
        <div class="col mb-6" data-aos="fade-up">
          <div class="icon-box text-center" data-vivus-hover>
            <div class="icon">
              <img class="svgInject" style="max-width: 50px !important;" src="{{asset('assets/finshWebsite/images/time.svg')}}" alt="" />
            </div>
            <div class="content-service">
              <h3 class="title">Rent by hour</h3>
              <div class="desc">
                <p>
                  You can rent your dream car any day and anywhere we have
                  good offers.
                </p>
              </div>
              <a class="learn-more" href="services_en.html">
                <span class="circle" aria-hidden="true">
                  <span class="icon arrow"></span>
                </span>
                <span class="button-text">See More</span>
              </a>
            </div>
          </div>
        </div>
        <!-- Icon Box End -->

        <!-- Icon Box Start -->
        <div class="col mb-6" data-aos="fade-up">
          <div class="icon-box text-center" data-vivus-hover>
            <div class="icon">
              <img class="svgInject" style="max-width: 50px !important;" src="{{asset('assets/finshWebsite/exomac/assets/images/svg/linea/calendar-alt-svgrepo-com.svg')}}" alt="" />
            </div>
            <div class="content-service">
              <h3 class="title">Rent by Days</h3>
              <div class="desc">
                <p>
                  You can rent your dream car any day and anywhere we have
                  good offers.
                </p>
              </div>
              <a class="learn-more" href="services_en.html">
                <span class="circle" aria-hidden="true">
                  <span class="icon arrow"></span>
                </span>
                <span class="button-text">See More</span>
              </a>
            </div>
          </div>
        </div>
        <!-- Icon Box End -->

        <!-- Icon Box Start -->
        <div class="col mb-6" data-aos="fade-up">
          <div class="icon-box text-center" data-vivus-hover>
            <div class="icon">
              <img class="svgInject" style="max-width: 50px !important;" src="{{asset('assets/finshWebsite/images/school-flag-svgrepo-com.svg')}}" alt="" />
            </div>
            <div class="content-service">
              <h3 class="title">School System</h3>
              <div class="desc">
                <p>
                  You can rent your dream car any day and anywhere we have
                  good offers.
                </p>
              </div>
              <a class="learn-more" href="services_en.html">
                <span class="circle" aria-hidden="true">
                  <span class="icon arrow"></span>
                </span>
                <span class="button-text">See More</span>
              </a>
            </div>
          </div>
        </div>
        <!-- Icon Box End -->
      </div>
    </div>
</div>
<!-- Service Section End -->

<!-- Video Section Start -->
<div class="video-section section section-padding" data-bg-color="#000" data-overlay="0.7" data-bg-image="finshWebsite/exomac/assets/images/bg/video-bg.jpg">
    <div class="container text-center">
        <!-- Section Title Start -->
        <div class="section-title color-light text-center" data-aos="fade-up">
            <h2 class="title">Watch All Media</h2>
        </div>
        <!-- Section Title End -->
        <a href="https://www.youtube.com/watch?v=KELarqoNGts" class="play-btn icon video-popup">
            <i class="fas fa-play"></i>
        </a>
    </div>
</div>
<!-- Video Section End -->

<!-- Offer Section Start -->
<div id="offer" class="section section-padding-t110-b120" style="background-color: rgb(248, 250, 255)">
    <div class="container shape-animate">
      <!-- Section Title Start -->
      <div class="section-title text-center mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
        <h2 class="title">Choose your monthly plan</h2>
        <p class="sub-title">
            Our team of designers, developers and creatives are perfectionists
            who love what they do and love where they work
        </p>
      </div>
      <!-- Section Title End -->

      <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
        <div class="col mb-6" data-aos="fade-up">
          <!-- Contact Information Start -->
          <div class="table">
            <h3 id="name_box" class="name">Silver</h3>
            <div id="price_card_box" class="price_card">
              1000L.E
              <span class="monthly">monthly</span>
            </div>
            <ul class="content_card">
              <li>One Selected template</li>
              <li>Two Selected template</li>
              <li>Three Selected template</li>
              <li class="disable">Four Selected template</li>
            </ul>
            <a class="buy_now" href="offer_details_silver_en.html">Buy Now</a>
          </div>
          <!-- Contact Information End -->
        </div>
        <div class="col mb-6" data-aos="fade-up">
          <!-- Contact Information Start -->
          <div class="table table2">
            <h3 id="name_box" class="name">Gold</h3>
            <div id="price_card_box" class="price_card">
              1800L.E
              <span class="monthly">monthly</span>
            </div>
            <ul class="content_card">
              <li>One Selected template</li>
              <li>Two Selected template</li>
              <li>Three Selected template</li>
              <li class="disable">Four Selected template</li>
            </ul>
            <a class="buy_now" href="offer_details_gold_en.html">Buy Now</a>
          </div>
          <!-- Contact Information End -->
        </div>
        <div class="col mb-6" data-aos="fade-up">
          <!-- Contact Information Start -->
          <div class="table table3">
            <h3 id="name_box" class="name">Platinum</h3>
            <div id="price_card_box" class="price_card">
              2500L.E
              <span class="monthly">monthly</span>
            </div>
            <ul class="content_card">
              <li>One Selected template</li>
              <li>Two Selected template</li>
              <li>Three Selected template</li>
              <li class="disable">Four Selected template</li>
            </ul>
            <a class="buy_now" href="offer_details_platnum_en.html">Buy Now</a>
          </div>
          <!-- Contact Information End -->
        </div>
      </div>

      <!-- Animation Shape Start -->
      <div class="shape shape-1 scene">
        <span data-depth="4">
            <img src="{{asset('assets/finshWebsite/exomac/assets/images/shape-animation/video-shape-1.png')}}" alt="shape" />
        </span>
      </div>
      <!-- Animation Shape End -->
    </div>
</div>
<!-- Offer Section End -->

<!-- Portfolio Section Start -->
<div class="section section-padding ag-masonary-wrapper" data-bg-color="#f8faff">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <!-- Portfolio Menu Start -->
          <div class="messonry-button text-lg-right text-left mb-lg-13 mb-md-13 mb-6">
            <button data-filter="*" class="is-checked">
              <span class="filter-text">All</span>
            </button>
            <!-- <button data-filter=".cat-1">
                <span class="filter-text">App</span>
              </button> -->
            <button data-filter=".cat-2">
              <span class="filter-text">Captions</span>
            </button>
            <button data-filter=".cat-3">
              <span class="filter-text">Client</span>
            </button>
          </div>
          <!-- Portfolio Menu End -->
        </div>
      </div>

      <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 g-0 mesonry-list">
        <div class="resizer col"></div>
        <!-- Single Portfolio Start -->
        <div class="col cat-1 cat-3">
          <div class="single-portfolio">
            <div class="thumbnail">
              <img class="img-fluid" src="{{asset('assets/finshWebsite/images/cars/client/client1.jpg')}}" alt="Portfolio-01" />
            </div>
            <div class="content">
              <h5 class="title">
                <a href="#">Project Name #1
                  <img src="{{asset('assets/finshWebsite/exomac/assets/images/icons/arrow-up-right.svg')}}" alt="" />
                </a>
              </h5>
            </div>
          </div>
        </div>
        <!-- Single Portfolio End -->
        <!-- Single Portfolio Start -->
        <div class="col cat-2 cat-5">
          <div class="single-portfolio">
            <div class="thumbnail">
              <img class="img-fluid" src="{{asset('assets/finshWebsite/images/cars/driver/driver1.jpg')}}" alt="Portfolio-01" />
            </div>
            <div class="content">
              <h5 class="title">
                <a href="#">Project Name #1
                  <img src="{{asset('assets/finshWebsite/exomac/assets/images/icons/arrow-up-right.svg')}}" alt="" /></a>
              </h5>
            </div>
          </div>
        </div>
        <!-- Single Portfolio End -->
        <!-- Single Portfolio Start -->
        <div class="col cat-3 cat-2">
          <div class="single-portfolio">
            <div class="thumbnail">
              <img class="img-fluid" src="{{asset('assets/finshWebsite/images/cars/client/client2.jpg')}}" alt="Portfolio-01" />
            </div>
            <div class="content">
              <h5 class="title">
                <a href="#">Project Name #1
                  <img src="{{asset('assets/finshWebsite/exomac/assets/images/icons/arrow-up-right.svg')}}" alt="" /></a>
              </h5>
            </div>
          </div>
        </div>
        <!-- Single Portfolio End -->
        <!-- Single Portfolio Start -->
        <div class="col cat-4 cat-3">
          <div class="single-portfolio">
            <div class="thumbnail">
              <img class="img-fluid" src="{{asset('assets/finshWebsite/images/cars/client/client3.jpg')}}" alt="Portfolio-01" />
            </div>
            <div class="content">
              <h5 class="title">
                <a href="#">Project Name #1
                  <img src="{{asset('assets/finshWebsite/exomac/assets/images/icons/arrow-up-right.svg')}}" alt="" /></a>
              </h5>
            </div>
          </div>
        </div>
        <!-- Single Portfolio End -->
        <!-- Single Portfolio Start -->
        <div class="col cat-5">
          <div class="single-portfolio">
            <div class="thumbnail">
              <img class="img-fluid" src="{{asset('assets/finshWebsite/images/cars/driver/driver3.jpg')}}" alt="Portfolio-01" />
            </div>
            <div class="content">
              <h5 class="title">
                <a href="#">Project Name #1
                  <img src="{{asset('assets/finshWebsite/exomac/assets/images/icons/arrow-up-right.svg')}}" alt="" /></a>
              </h5>
            </div>
          </div>
        </div>
        <!-- Single Portfolio End -->
        <!-- Single Portfolio Start -->
        <div class="col cat-2">
          <div class="single-portfolio">
            <div class="thumbnail">
              <img class="img-fluid" src="{{asset('assets/finshWebsite/images/cars/driver/driver2.jpg')}}" alt="Portfolio-01" />
            </div>
            <div class="content">
              <h5 class="title">
                <a href="#">Project Name #1
                  <img src="{{asset('assets/finshWebsite/exomac/assets/images/icons/arrow-up-right.svg')}}" alt="" /></a>
              </h5>
            </div>
          </div>
        </div>
        <!-- Single Portfolio End -->
      </div>
    </div>
</div>
<!-- Portfolio Section End -->

<!-- Vehicles Swiper Section Start -->
<div id="Vehicles" class="section section-padding-t90-b100">
    <div class="container">
      <!-- Section Title Start -->
      <div class="section-title text-center" data-aos="fade-up">
        <h2 class="title">choose your Vehicles</h2>
        <p class="sub-title">
          We have the ability to transform the passenger experience into a
          distinctive and comfortable one by paying attention to small
          details such as the cleanliness of the car, friendly dealing with
          passengers, listening to their needs, and trying to meet their
          requests in the best possible way.
        </p>
      </div>
      <!-- Section Title End -->
      <swiper-container class="mySwiper" scrollbar-hide="true">
        <swiper-slide>
          <div class="item">
            <img src="{{asset('assets/finshWebsite/images/cars/vehicle_1.jpg')}}" alt="" />
            <h2>Mercedes Benz</h2>
                <div class="car_info">
                  <ul class="float_left">
                    <li>
                      <i class="fa-solid fa-car"></i>
                      Seats
                    </li>
                    <li>
                      <i class="fa-solid fa-briefcase"></i>
                      Small
                    </li>
                  </ul>
                  <ul class="float_left">
                    <li>
                      <i class="fa-solid fa-door-closed"></i>
                      Doors
                    </li>
                    <li>
                      <i class="fa-solid fa-gears"></i>
                      Automatic
                    </li>
                  </ul>
                </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="item">
            <img src="{{asset('assets/finshWebsite/images/cars/vehicle_2.jpg')}}" alt="" />
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="item">
            <img src="{{asset('assets/finshWebsite/images/cars/vehicle_3.jpg')}}" alt="" />
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="item">
            <img src="{{asset('assets/finshWebsite/images/cars/vehicle_4.jpg')}}" alt="" />
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="item">
            <img src="{{asset('assets/finshWebsite/images/cars/vehicle_5.jpg')}}" alt="" />
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="item">
            <img src="{{asset('assets/finshWebsite/images/cars/vehicle_6.jpg')}}" alt="" />
          </div>
        </swiper-slide>
      </swiper-container>
    </div>
</div>
<!-- Vehicles Swiper Section End -->

<!-- Newsletter Section Start -->
<div class="section section-padding-t110-b120 newsletter-section" data-bg-color="#000" data-overlay="0.7" data-bg-image="{{asset('assets/finshWebsite/exomac/assets/images/bg/newsletter.jpg')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
            <!-- Newsletter Content Start -->
                <div class="newsletter-content">
                    <!-- Section Title Start -->
                    <div class="section-title color-light text-center" data-aos="fade-up">
                    <h2 class="title">Let's find out how we work together</h2>
                    <p class="sub-title fz-18">
                        Contact information collected through this form will only be
                        used to send a response to your inquiry.
                    </p>
                    </div>
                    <!-- Section Title End -->
                    <!-- Newsletter Form Start -->
                    <div class="newsletter-form">
                    <form action="#">
                        <input type="email" placeholder="Ente your email" name="mail" />
                        <button class="btn btn-primary btn-hover-secondary">
                        Subscribe
                        </button>
                    </form>
                    </div>
                    <!-- Newsletter Form End -->
                </div>
            <!-- Newsletter Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Newsletter Section End -->

<!-- Contact Information Section Start -->
<div id="contact" class="section section-padding-t90-b100">
    <div class="container shape-animate">
      <!-- Section Title Start -->
      <div class="section-title text-center mb-lg-12 mb-sm-8 mb-xs-8" data-aos="fade-up">
        <h2 class="title">We are a full-service creative agency</h2>
        <p class="sub-title">
            Our team of designers, developers and creatives are perfectionists
            who love what they do and love where they work
          </p> 
      </div>
      <!-- Section Title End -->

      <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n6">
        <div class="col mb-6" data-aos="fade-up">
          <div class="contact-info" data-vivus-hover>
            <div class="icon">
              <img class="svgInject" src="{{asset('assets/finshWebsite/exomac/assets/images/svg/linea/linea-basic-map.svg')}}" alt="" />
            </div>
            <div class="info">
              <h4 class="title">Our Locations</h4>
              <span class="info-text">
                Mohamed Hassan Street / Mariouteya / Al Haram
                <br />
                <br />
              </span>
            </div>
          </div>
        </div>
        <div class="col mb-6" data-aos="fade-up">
          <div class="contact-info" data-vivus-hover>
            <div class="icon">
              <img class="svgInject" src="{{asset('assets/finshWebsite/exomac/assets/images/svg/linea/linea-basic-message-txt.svg')}}"
                alt="" />
            </div>
            <div class="info">
              <h4 class="title">Call Us</h4>
              <span class="info-text">
                (02) 01110777579 <br />
                <br />
              </span>
            </div>
          </div>
        </div>
        <div class="col mb-6" data-aos="fade-up">
          <div class="contact-info" data-vivus-hover>
            <div class="icon">
              <img class="svgInject" src="{{asset('assets/finshWebsite/exomac/assets/images/svg/linea/linea-basic-mail-open-text.svg')}}"
                alt="" />
            </div>
            <div class="info">
              <h4 class="title">Help Desk</h4>
              <span class="info-text">
                <a href="https://info@tripu.net">info@tripu.net</a>
                <br />
                <a href="#">sales@hasthemes.com</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!--Start Test_Area -->

@endsection

@section('css')