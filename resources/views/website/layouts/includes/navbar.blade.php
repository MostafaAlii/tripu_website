<!-- Header Section Start -->
<div class="header-section header-transparent sticky-header section">
    <div class="header-inner">
      <div class="container position-relative">
        <div class="mynav">
          <!-- Header Logo Start -->
          <div class="col-xl-2 col-auto">
            <div class="header-logo">
              <a href="home_en.html">
                <img src="{{asset('assets/finshWebsite/images/التسليم/التسليم/موكاب/noBackground.png')}}" alt="" />
              </a>
            </div>
          </div>
          <!-- Header Logo End -->

          <!-- Header Main Menu Start -->
          <div
            class="col-auto col-xl d-flex align-items-center justify-content-xl-center justify-content-end order-2 order-xl-1">
            <div class="menu-column-area d-none d-xl-block position-static">
              <nav class="site-main-menu">
                <ul>
                  <li>
                    <a href="#"><span class="menu-text">Home</span></a>
                  </li>
                  <li>
                    <a href="#"><span class="menu-text">Offer</span></a>
                  </li>
                  <li>
                    <a href="#"><span class="menu-text">Services</span></a>
                  </li>
                  <li>
                    <a href="#"><span class="menu-text">Vehicles</span></a>
                  </li>
                  <li class="has-children">
                    <a href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span id="profileName"
                        class="menu-text">Profile</span></a>
                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                    <ul class="sub-menu">
                      <li>
                        <a href="#"><span class="menu-text">Edit Profile Caption</span></a>
                      </li>
                      <li>
                        <a href="#"><span class="menu-text">Edit Profile Client</span></a>
                      </li>
                    </ul>
                  </li>
                  <li id="IsSignIn" class="has-children">
                    <a href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="menu-text">SignIn</span></a>
                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                    <ul class="sub-menu">
                      <li>
                        <a href="#"><span class="menu-text">SignIn Caption</span></a>
                      </li>
                      <li>
                        <a href="#"><span class="menu-text">SignIn Client</span></a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#"><span class="menu-text">About Us</span></a>
                  </li>
                  <li>
                    <a href="#"><span class="menu-text">Contact Us</span></a>
                  </li>
                  <!-- Start notification -->
                  <li class="has-children">
                    <a href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="menu-text">
                        <div class="bell-notificatin" current-count="8">
                          <i class="fa-solid fa-bell"></i>
                          <!-- animate__animated animate__flipInX -->
                        </div>
                      </span></a>
                    <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                    <ul class="sub-menu">
                      <li>
                        <div class="notification-item">
                          <img src="{{asset('assets/finshWebsite/exomac/assets/images/team/team-1.jpg')}}" alt="" />
                          <div class="notification-text marginrtl">
                            <h4>احمد عادل</h4>
                            <p>كيف يمكنني مساعدك</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="notification-item">
                          <img src="{{asset('assets/finshWebsite/exomac/assets/images/team/team-2.jpg')}}" alt="" />
                          <div class="notification-text marginrtl">
                            <h4>احمد عادل</h4>
                            <p>كيف يمكنني مساعدك</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="notification-item">
                          <img src="{{asset('assets/finshWebsite/exomac/assets/images/team/team-2.jpg')}}" alt="" />
                          <div class="notification-text marginrtl">
                            <h4>احمد عادل</h4>
                            <p>كيف يمكنني مساعدك</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="notification-item">
                          <div class="notification-text flexcenter">
                            <a href="profile_caption_new_en.html"
                              class="btn_notification btn-primary btn-hover-secondary paddingsbtn">
                              All
                            </a>
                            <!-- <a class="" href="#">View All</a> -->
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <!-- End notification -->
                  <!-- Start Language Switch -->
                  <li class="has-children">
                      <a href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="menu-text">
                              <i class="fa-solid fa-earth-americas stylesvglang m-1"></i>
                              {{ LaravelLocalization::getCurrentLocaleNative() }}
                          </span>
                      </a>
                      <span class="menu-toggle"><i class="far fa-angle-down"></i></span>
                      <ul class="sub-menu">
                          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                              <li>
                                  <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                      {{ $properties['native'] }}
                                  </a>
                              </li>
                          @endforeach
                      </ul>
                  </li>
                  <!-- End Language Switch -->
                </ul>
              </nav>
            </div>
            <!-- Header Search Start -->
            <div class="header-search-area ml-xl-7 ml-0">
              <!-- Header Login Start -->
              <div class="header-search">
                <a href="javascript:void(0)" class="header-search-toggle"><i class="pe-7s-search pe-2x pe-va"></i></a>
              </div>
              <!-- Header Login End -->
            </div>
            <!-- Header Search End -->
            <!-- Start logout -->
            <div id="logout">
              <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </div>
            <!-- End logout -->
            <!-- Header Mobile Menu Toggle Start -->
            <div class="header-mobile-menu-toggle d-xl-none ml-sm-2">
              <button class="toggle">
                <i class="icon-top"></i>
                <i class="icon-middle"></i>
                <i class="icon-bottom"></i>
              </button>
            </div>
            <!-- Header Mobile Menu Toggle End -->
          </div>
          <!-- Header Main Menu End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Header Section End -->