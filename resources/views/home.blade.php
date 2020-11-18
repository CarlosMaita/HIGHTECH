@extends('layouts.app')

@section('title')
 High Tech Bearings
@endsection

@section('content')
<!--div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</!--div-->

    <!-- header -->
    <header class="header-sticky header-dark">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="../../index.html">
            <img class="navbar-logo navbar-logo-light" src="../../assets/images/demo/logo/logo-light.svg" alt="Logo">
            <img class="navbar-logo navbar-logo-dark" src="../../assets/images/demo/logo/logo-dark.svg" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="burger"><span></span></span></button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav align-items-center mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="../../index.html" role="button">
                  Home
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../../landing-pages.html">
                    <span>Landing Pages</span>
                    <p>Start with one of pre-made templates.</p>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../inner-pages.html">
                    <span>Inner Pages</span>
                    <p>Extend your website with these pages.</p>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../app-pages.html">
                    <span>App Pages</span>
                    <p>Add functionality to your website.</p>
                  </a>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-mega">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Components
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown-1">
                  <div class="row">
                    <div class="col">
                      <ul class="mega-list">
                        <li><a href="../../components/index.html" class="highlight">Getting Started</a></li>
                        <li><a href="../../components/accordions.html">Accordions</a></li>
                        <li><a href="../../components/backgrounds.html">Backgrounds</a></li>
                        <li><a href="../../components/blog.html">Blog</a></li>
                        <li><a href="../../components/boxes.html">Boxes</a></li>
                        <li><a href="../../components/buttons.html">Buttons</a></li>
                        <li><a href="../../components/cards.html">Cards</a></li>
                        <li><a href="../../components/carousels.html">Carousels</a></li>
                        <li><a href="../../components/cta.html">CTA</a></li>
                        <li><a href="../../components/features.html">Features</a></li>
                      </ul>
                    </div>
                    <div class="col">
                      <ul class="mega-list">
                        <li><a href="../../components/footers.html">Footers</a></li>
                        <li><a href="../../components/forms.html">Forms</a></li>
                        <li><a href="../../components/gallery.html">Gallery</a></li>
                        <li><a href="../../components/lightbox.html">Lightbox</a></li>
                        <li><a href="../../components/maps.html">Maps</a></li>
                        <li><a href="../../components/masonry.html">Masonry</a></li>
                        <li><a href="../../components/modals.html">Modals</a></li>
                        <li><a href="../../components/partners.html">Partners</a></li>
                        <li><a href="../../components/presentation.html">Presentations</a></li>
                        <li><a href="../../components/pricing.html">Pricing</a></li>
                      </ul>
                    </div>
                    <div class="col">
                      <ul class="mega-list">
                        <li><a href="../../components/progress.html">Progress</a></li>
                        <li><a href="../../components/sliders.html">Sliders</a></li>
                        <li><a href="../../components/steps.html">Steps</a></li>
                        <li><a href="../../components/tables.html">Tables</a></li>
                        <li><a href="../../components/tabs.html">Tabs</a></li>
                        <li><a href="../../components/testimonials.html">Testimonials</a></li>
                        <li><a href="../../components/typed.html">Typed</a></li>
                        <li><a href="../../components/typography.html">Typography</a></li>
                        <li><a href="../../components/users.html">Users</a></li>
                        <li><a href="../../components/utility.html">Utility</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>

            <ul class="navbar-nav align-items-center mr-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Michael Doe
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="../app/profile.html">Public Profile</a>
                  <a class="dropdown-item" href="../app/connections.html">Connections</a>
                  <a class="dropdown-item" href="../app/groups.html">Groups</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../app/settings.html">Settings</a>
                  <a class="dropdown-item" href="../app/payments.html">Payments</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- header -->

    <!-- cover -->
    <section class="p-0">
      <div class="swiper-container"
        data-top-top="transform: translateY(0px);" 
        data-top-bottom="transform: translateY(250px);">
        <div class="swiper-wrapper">
          <div class="swiper-slide vh-100">
            <div class="image image-overlay image-zoom" style="background-image:url(../../assets/images/demo/event/event-1.jpg)"></div>
            <div class="caption">
              <div class="container">
                <div class="row justify-content-between vh-100">
                  <div class="col-lg-8 align-self-center text-white text-shadow" data-swiper-parallax="-100%">
                    <span class="eyebrow text-white mb-1">Design Rethinked</span>
                    <h1 class="display-2">Visual Design Conference</h1>
                    <a href="" class="btn btn-white btn-rounded px-5">Register</a>
                  </div>
                  <div class="col-lg-4 align-self-end">
                    <div class="row gutter-1">
                      <div class="col-6">
                        <div class="equal">
                          <div class="boxed">
                            <div class="equal-header">
                              <h4>Dec 18, 2018</h4>
                            </div>
                            <div class="equal-footer">
                              <span class="text-muted">when</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 text-white">
                        <div class="equal">
                          <div class="bordered">
                            <div class="equal-header">
                              <h4>San Francisco</h4>
                            </div>
                            <div class="equal-footer">
                              <span class="text-muted">where</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 text-white">
                        <div class="equal">
                          <div class="bordered">
                            <div class="equal-header">
                              <h4>120 Speakers</h4>
                            </div>
                            <div class="equal-footer">
                              <span class="text-muted">who</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-footer text-white">
            <div class="container-fluid">
              <div class="row">
                <div class="col text-center">
                  <div class="mouse"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / cover -->

    <!-- text -->
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-8">
            <h3 class="text-decorated text-decorated--padding">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- / text -->

    <!-- partners -->
    <section class="separator-top">
      <div class="container">
        <div class="row">
          <div class="col partners align-items-center">
            <div class="owl-carousel" data-items="[6,4,2]" data-loop="true" data-autoplay="true">
              <div class="logo">
                <img src="../../assets/images/demo/logo/logo-1.png" alt="Logo">
              </div>
              <div class="logo">
                <img src="../../assets/images/demo/logo/logo-2.png" alt="Logo">
              </div>
              <div class="logo">
                <img src="../../assets/images/demo/logo/logo-3.png" alt="Logo">
              </div>
              <div class="logo">
                <img src="../../assets/images/demo/logo/logo-4.png" alt="Logo">
              </div>
              <div class="logo">
                <img src="../../assets/images/demo/logo/logo-5.png" alt="Logo">
              </div>
              <div class="logo">
                <img src="../../assets/images/demo/logo/logo-6.png" alt="Logo">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / partners -->

    <!-- user carousel -->
    <section class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2>Our Speakers</h2>
          </div>
          <div class="col-lg-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae esse rem nesciunt quos, porro ratione reprehenderit unde fuga commodi incidunt fugiat iure omnis eaque autem animi nemo explicabo cum earum.</p>
          </div>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col">
            <div class="owl-carousel visible" data-items="[3]" data-nav="true" data-margin="10">
              <figure class="user">
                <a href="" class="user-photo">
                  <img src="../../assets/images/demo/user-1.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>Nicole Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials bordered">
                    <li><a href="" class="icon-facebook fs-20"></a></li>
                    <li><a href="" class="icon-instagram fs-20"></a></li>
                    <li><a href="" class="icon-twitter fs-20"></a></li>
                    <li><a href="" class="icon-linkedin fs-20"></a></li>
                  </ul>
                </figcaption>
              </figure>

              <figure class="user">
                <a href="" class="user-photo">
                  <img src="../../assets/images/demo/user-2.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>Valerie Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials bordered">
                    <li><a href="" class="icon-facebook fs-20"></a></li>
                    <li><a href="" class="icon-instagram fs-20"></a></li>
                    <li><a href="" class="icon-twitter fs-20"></a></li>
                    <li><a href="" class="icon-linkedin fs-20"></a></li>
                  </ul>
                </figcaption>
              </figure>

              <figure class="user">
                <a href="" class="user-photo">
                  <img src="../../assets/images/demo/user-3.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>Michael Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials bordered">
                    <li><a href="" class="icon-facebook fs-20"></a></li>
                    <li><a href="" class="icon-instagram fs-20"></a></li>
                    <li><a href="" class="icon-twitter fs-20"></a></li>
                    <li><a href="" class="icon-linkedin fs-20"></a></li>
                  </ul>
                </figcaption>
              </figure>

              <figure class="user">
                <a href="" class="user-photo">
                  <img src="../../assets/images/demo/user-4.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>John Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials bordered">
                    <li><a href="" class="icon-facebook fs-20"></a></li>
                    <li><a href="" class="icon-instagram fs-20"></a></li>
                    <li><a href="" class="icon-twitter fs-20"></a></li>
                    <li><a href="" class="icon-linkedin fs-20"></a></li>
                  </ul>
                </figcaption>
              </figure>

              <figure class="user">
                <a href="" class="user-photo">
                  <img src="../../assets/images/demo/user-5.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>Valerie Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials bordered">
                    <li><a href="" class="icon-facebook fs-20"></a></li>
                    <li><a href="" class="icon-instagram fs-20"></a></li>
                    <li><a href="" class="icon-twitter fs-20"></a></li>
                    <li><a href="" class="icon-linkedin fs-20"></a></li>
                  </ul>
                </figcaption>
              </figure>

              <figure class="user">
                <a href="" class="user-photo">
                  <img src="../../assets/images/demo/user-6.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>Ariana Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials bordered">
                    <li><a href="" class="icon-facebook fs-20"></a></li>
                    <li><a href="" class="icon-instagram fs-20"></a></li>
                    <li><a href="" class="icon-twitter fs-20"></a></li>
                    <li><a href="" class="icon-linkedin fs-20"></a></li>
                  </ul>
                </figcaption>
              </figure>

              <figure class="user">
                <a href="" class="user-photo">
                  <img src="../../assets/images/demo/user-7.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>Josh Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials bordered">
                    <li><a href="" class="icon-facebook fs-20"></a></li>
                    <li><a href="" class="icon-instagram fs-20"></a></li>
                    <li><a href="" class="icon-twitter fs-20"></a></li>
                    <li><a href="" class="icon-linkedin fs-20"></a></li>
                  </ul>
                </figcaption>
              </figure>

              <figure class="user">
                <a href="" class="user-photo">
                  <img src="../../assets/images/demo/user-8.jpg" alt="Avatar">
                </a>
                <figcaption class="user-caption">
                  <h4>Richard Doe</h4>
                  <span>Head of Experience Design</span>
                  <ul class="socials bordered">
                    <li><a href="" class="icon-facebook fs-20"></a></li>
                    <li><a href="" class="icon-instagram fs-20"></a></li>
                    <li><a href="" class="icon-twitter fs-20"></a></li>
                    <li><a href="" class="icon-linkedin fs-20"></a></li>
                  </ul>
                </figcaption>
              </figure>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / user carousel -->

    <!-- schedule -->
    <section class="bg-dark text-white">
      <div class="container">
        <div class="row mb-3">
          <div class="col">
            <div class="nav nav-text">
              <a class="nav-item nav-link active" data-toggle="tab" href="#first">18 December</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#second">17 December</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane show active" id="first" role="tabpanel" aria-labelledby="first-tab">
                <div class="accordion-group" data-accordion-group>
                  <div class="accordion" data-accordion>
                    <div class="accordion-control" data-control>
                      <span class="fw-25">8:00 - 9:00</span>
                      <h5>Registration</h5>
                      <div class="speakers text-right">
                        <ul class="user-list">
                          <li><img src="../../assets/images/demo/user-1.jpg" alt="" data-toggle="tooltip" data-placement="top" title="Valerie Doe"></li>
                        </ul>
                      </div>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p class="ml-lg-25 mr-lg-25">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion" data-accordion>
                    <div class="accordion-control" data-control>
                      <span class="fw-25">9:00 - 10:30</span>
                      <h5>Opening words from our headliner</h5>
                      <div class="speakers text-right">
                        <ul class="user-list">
                          <li><img src="../../assets/images/demo/user-2.jpg" alt="" data-toggle="tooltip" data-placement="top" title="Valerie Doe"></li>
                        </ul>
                      </div>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p class="ml-lg-25 mr-lg-25">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion" data-accordion>
                    <div class="accordion-control" data-control>
                      <span class="fw-25">12:50 - 14:00</span>
                      <h5>Master class from our top web designers in Europe</h5>
                      <div class="speakers text-right">
                        <ul class="user-list">
                          <li><img src="../../assets/images/demo/user-3.jpg" alt="" data-toggle="tooltip" data-placement="top" title="Valerie Doe"></li>
                          <li><img src="../../assets/images/demo/user-4.jpg" alt="" data-toggle="tooltip" data-placement="top" title="John Doe"></li>
                          <li><img src="../../assets/images/demo/user-5.jpg" alt="" data-toggle="tooltip" data-placement="top" title="John Doe"></li>
                        </ul>
                      </div>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p class="ml-lg-25 mr-lg-25">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion" data-accordion>
                    <div class="accordion-control" data-control>
                      <span class="fw-25">14:00 - 15:20</span>
                      <h5>Life of a successfull freelancer</h5>
                      <div class="speakers text-right">
                        <ul class="user-list">
                          <li><img src="../../assets/images/demo/user-6.jpg" alt="" data-toggle="tooltip" data-placement="top" title="Valerie Doe"></li>
                        </ul>
                      </div>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p class="ml-lg-25 mr-lg-25">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="second" role="tabpanel" aria-labelledby="second-tab">
                <div class="accordion-group" data-accordion-group>
                  <div class="accordion" data-accordion>
                    <div class="accordion-control" data-control>
                      <span class="fw-25">8:00 - 9:00</span>
                      <h5>Registration</h5>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p class="ml-lg-25 mr-lg-25">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion" data-accordion>
                    <div class="accordion-control" data-control>
                      <span class="fw-25">9:00 - 10:30</span>
                      <h5>Opening words from our headliner</h5>
                      <div class="speakers text-right">
                        <ul class="user-list">
                          <li><img src="../../assets/images/demo/user-7.jpg" alt="" data-toggle="tooltip" data-placement="top" title="Valerie Doe"></li>
                        </ul>
                      </div>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p class="ml-lg-25 mr-lg-25">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion" data-accordion>
                    <div class="accordion-control" data-control>
                      <span class="fw-25">10:40 - 12:50</span>
                      <h5>Review of our best case studies</h5>
                      <div class="speakers text-right">
                        <ul class="user-list">
                          <li><img src="../../assets/images/demo/user-8.jpg" alt="" data-toggle="tooltip" data-placement="top" title="John Doe"></li>
                        </ul>
                      </div>
                    </div>
                    <div class="accordion-content" data-content>
                      <div class="accordion-content-wrapper">
                        <p class="ml-lg-25 mr-lg-25">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / schedule -->

    <!-- presentation -->
    <section>
      <div class="container-fluid">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
          <div class="col-lg-7">
            <div class="owl-carousel owl-carousel-single pr-0" data-dots="true" data-autoheight="true">
              <img src="../../assets/images/demo/event/event-3.jpg" alt="Image">
              <img src="../../assets/images/demo/event/event-4.jpg" alt="Image">
            </div>
          </div>
          <div class="col-md-8 col-lg-5 pl-lg-4">
            <span class="eyebrow text-primary mb-2">Special for you</span>
            <h2>We're in business <br>since 2015</h2>
            <hr class="w-25 ml-0">
            <div class="row gutter-3">
              <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <div class="media">
                  <i class="icon-check-circle2 fs-24 mr-2 text-primary"></i>
                  <div class="media-body">
                    <h4 class="eyebrow font-weight-bold">Verified Speakers</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <div class="media">
                  <i class="icon-camera2 fs-24 mr-2 text-primary"></i>
                  <div class="media-body">
                    <h4 class="eyebrow font-weight-bold">Photo Gallery</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                <div class="media">
                  <i class="icon-camera2 fs-24 mr-2 text-primary"></i>
                  <div class="media-body">
                    <h4 class="eyebrow font-weight-bold">Photo Gallery</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / presentation -->

    <!-- faq -->
    <section class="bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 col-lg-6 text-md-center">
            <h2>Still have some <i class="font-weight-bold">questions</i>?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint maiores, consequuntur tempore, odio voluptatem</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="accordion-group accordion-group-minimal" data-accordion-group>
              <div class="accordion" data-accordion data-aos="fade-up">
                <div class="accordion-control" data-control>
                  <h5>What type of ticket should I choose ?</h5>
                </div>
                <div class="accordion-content" data-content>
                  <div class="accordion-content-wrapper">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                  </div>
                </div>
              </div>
              <div class="accordion" data-accordion data-aos="fade-up">
                <div class="accordion-control" data-control>
                  <h5>Is there a Money Back option ?</h5>
                </div>
                <div class="accordion-content" data-content>
                  <div class="accordion-content-wrapper">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                  </div>
                </div>
              </div>
              <div class="accordion" data-accordion data-aos="fade-up">
                <div class="accordion-control" data-control>
                  <h5>Is there a Money Back option ?</h5>
                </div>
                <div class="accordion-content" data-content>
                  <div class="accordion-content-wrapper">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="accordion-group accordion-group-minimal" data-accordion-group>
              <div class="accordion" data-accordion data-aos="fade-up">
                <div class="accordion-control" data-control>
                  <h5>Can I buy a ticket right at the venue ?</h5>
                </div>
                <div class="accordion-content" data-content>
                  <div class="accordion-content-wrapper">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                  </div>
                </div>
              </div>
              <div class="accordion" data-accordion data-aos="fade-up">
                <div class="accordion-control" data-control>
                  <h5>What hotel should I choose ?</h5>
                </div>
                <div class="accordion-content" data-content>
                  <div class="accordion-content-wrapper">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                  </div>
                </div>
              </div>
              <div class="accordion" data-accordion data-aos="fade-up">
                <div class="accordion-control" data-control>
                  <h5>What hotel should I choose ?</h5>
                </div>
                <div class="accordion-content" data-content>
                  <div class="accordion-content-wrapper">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quam odit voluptatum, rem libero modi labore porro commodi inventore architecto explicabo reiciendis, perspiciatis voluptatibus odio, sequi nobis? Optio, aperiam, tenetur!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / faq -->

    <!-- pricing -->
    <section class="bg-primary">
      <div class="container mb-0">
        <div class="row align-items-center">
          <div class="col-lg-4 text-white">
            <h2>Pricing Plans</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="nav nav-switch mt-2">
              <a class="nav-item nav-link active" id="first-tab" data-toggle="tab" href="#pricing-first">Monthly</a>
              <a class="nav-item nav-link" id="second-tab" data-toggle="tab" href="#pricing-second">Yearly</a>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="tab-content" id="myTabContent-2">
              <div class="tab-pane show active" id="pricing-first" role="tabpanel" aria-labelledby="first-tab">
                <div class="row gutter-2">
                  <div class="col-md-6 text-white" data-aos="fade-up">
                    <div class="card card-price bordered rising">
                      <div class="card-body">
                        <i class="svg-icon w-25 fs-60">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                          <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="32,12 32,32 41,41 "/>
                          <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="4" y1="32" x2="8" y2="32"/>
                          <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="56" y1="32" x2="60" y2="32"/>
                          <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="32" y1="60" x2="32" y2="56"/>
                          <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="32" y1="8" x2="32" y2="4"/>
                          <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M32,63c17.121,0,31-13.879,31-31S49.121,1,32,1"/>
                          <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M32,63C14.879,63,1,49.121,1,32
                            c0-6.713,2.134-12.926,5.759-18l5.62-5.621"/>
                          <polyline fill="none" stroke="#000000" stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10" points="13,19 13,8 2,8 
                            "/>
                          </svg>
                        </i>
                        <h4 class="card-title">Starter Pack</h4>
                        <ul class="list-group list-group-minimal text-muted">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                        </ul>
                      </div>
                      <a href="" class="card-footer">
                        <strong class="card-price">$9</strong>/monthly
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="card card-price bordered rising">
                      <div class="card-body">
                        <i class="svg-icon w-25 fs-60">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                          <g>
                            <circle fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" cx="32" cy="19.001" r="4"/>
                            <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M45,21.023C44.968,13.276,39.181,7,32,7
                              s-13,6.276-13,14.023C19,31.046,31.979,47,31.979,47S45.043,31.046,45,21.023z"/>
                          </g>
                          <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="21,37 12,37 1,57 32,57 63,57 52,37 43,37 
                            "/>
                          </svg>
                        </i>
                        <h4 class="card-title">Starter Pack</h4>
                        <ul class="list-group list-group-minimal text-muted">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                        </ul>
                      </div>
                      <a href="" class="card-footer">
                        <strong class="card-price">$19</strong>/monthly
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="pricing-second" role="tabpanel" aria-labelledby="second-tab">
                <div class="row gutter-2">
                  <div class="col-md-6 text-white">
                    <div class="card card-price bordered rising">
                      <div class="card-body">
                        <i class="svg-icon w-25 fs-60">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                          <g>
                            <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="1,26 32,45.434 63,26   "/>
                            <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="11.334,21.667 1,26 1,63 63,63 63,26 
                              63,26 52.666,21.667   "/>
                            <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="11,32 11,1 53,1 53,32  "/>
                          </g>
                          </svg>
                        </i>
                        <h5 class="card-title">Starter Pack</h5>
                        <ul class="list-group list-group-minimal text-muted">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                        </ul>
                      </div>
                      <a href="" class="card-footer">
                        <strong class="card-price">$99</strong>/yearly
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-price bordered rising">
                      <div class="card-body">
                        <i class="svg-icon w-25 fs-60">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                          <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M21,40v5h22l0.001-5.107C49,36.195,53,29.564,53,22
                            c0-11.598-9.402-21-21-21s-21,9.402-21,21C11,29.565,14.998,36.304,21,40z"/>
                          <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="28" y1="45" x2="25" y2="25"/>
                          <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="36" y1="45" x2="39" y2="25"/>
                          <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="25,26 29,29 32,26 35,29 39,26 "/>
                          <rect x="21" y="45" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="22" height="6"/>
                          <rect x="23" y="51" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="18" height="6"/>
                          <rect x="25" y="57" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="14" height="6"/>
                          </svg>
                        </i>
                        <h5 class="card-title">Starter Pack</h5>
                        <ul class="list-group list-group-minimal text-muted">
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                        </ul>
                      </div>
                      <a href="" class="card-footer">
                        <strong class="card-price">$149</strong>/yearly
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col text-center text-white">
                <p><span class="badge badge-pill badge-white text-blue mr-1">Important</span> All plans include free breakfast.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / pricing -->

    <!-- blog -->
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8 text-center">
            <h2>From the <b>blog.</b></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="card card-minimal">
              <a href="" class="card-img-container">
                <img class="card-img" src="../../assets/images/demo/image-2.jpg" alt="Card image cap">
              </a>
              <div class="card-body">
                <h5 class="card-title"><a href="">Planning amazing weddings that you won’t forget.</a></h5>
                <span class="card-meta">Posted in Travel by <a href="">Mike Ross</a></span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card card-minimal">
              <a href="" class="card-img-container">
                <img class="card-img" src="../../assets/images/demo/image-square-1.jpg" alt="Card image cap">
              </a>
              <div class="card-body">
                <h5 class="card-title"><a href="">Planning amazing weddings that you won’t forget.</a></h5>
                <span class="card-meta">Posted in Travel by <a href="">Mike Ross</a></span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card card-minimal">
              <a href="" class="card-img-container">
                <img class="card-img" src="../../assets/images/demo/image-5.jpg" alt="Card image cap">
              </a>
              <div class="card-body">
                <h5 class="card-title"><a href="">Planning amazing weddings that you won’t forget.</a></h5>
                <span class="card-meta">Posted in Travel by <a href="">Mike Ross</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / blog -->

    <!-- map -->
    <section class="map">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="boxed p-5">
              <h2>USA, New York, Broadway</h2>
              <ul class="list-group list-group-line">
                <li class="list-group-item d-flex align-items-center">
                  <i class="icon-map-pin2 fs-24 text-blue"></i>
                  <span>5th Avenue</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <i class="icon-mail fs-24 text-blue"></i>
                  <span>example@example.com</span>
                </li>
                <li class="list-group-item d-flex align-items-center">
                  <i class="icon-phone2 fs-24 text-blue"></i>
                  <span>(123) 456-7890</span>
                </li>
              </ul>
              <a href="" class="btn btn-primary btn-block btn-rounded mt-2">View Full Map</a>
            </div>
          </div>
        </div>
      </div>
      <div id="map" class="map-area"></div>
      <script>
         function initMap() {
           // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 40.702888, lng: -74.012420},
          zoom: 12,
          disableDefaultUI: true,
          styles: [
            {
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "elementType": "labels.icon",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "elementType": "labels.text.stroke",
              "stylers": [
                {
                  "color": "#f5f5f5"
                }
              ]
            },
            {
              "featureType": "administrative.land_parcel",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#bdbdbd"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "poi",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "road",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#ffffff"
                }
              ]
            },
            {
              "featureType": "road.arterial",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#757575"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#dadada"
                }
              ]
            },
            {
              "featureType": "road.highway",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#616161"
                }
              ]
            },
            {
              "featureType": "road.local",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            },
            {
              "featureType": "transit.line",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#e5e5e5"
                }
              ]
            },
            {
              "featureType": "transit.station",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#eeeeee"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [
                {
                  "color": "#c9c9c9"
                }
              ]
            },
            {
              "featureType": "water",
              "elementType": "labels.text.fill",
              "stylers": [
                {
                  "color": "#9e9e9e"
                }
              ]
            }
          ]
        });

        map.panBy(0, -200);
        
        var pin ='../../assets/images/pin-blue.svg';

        var marker = new google.maps.Marker({
          position: map.getCenter(),
          icon: pin,
          map: map
        });
         }
       </script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHtKZB7XlS_CVrIFsPbgroMG0SgX3c-po&callback=initMap"
      async defer></script>
    </section>
    <!-- / map -->

    <!-- footer -->
    <footer class="bg-dark text-white">
      <div class="container py-5">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-5 text-center text-md-left">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Legal Information</a>
              </li>
            </ul>
          </div>
          <div class="col-md-2 text-center">
            <img class="logo-sm" src="../../assets/images/demo/logo/logo-light.svg" alt="Logo">
          </div>
          <div class="col-md-5 text-center text-md-right">
            <ul class="socials">
              <li><a href="" class="icon-facebook fs-20"></a></li>
              <li><a href="" class="icon-instagram fs-20"></a></li>
              <li><a href="" class="icon-twitter fs-20"></a></li>
              <li><a href="" class="icon-linkedin fs-20"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- / footer -->

@endsection
