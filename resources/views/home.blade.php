@extends('layouts.app')

@section('title', $title)


@section('content')


      <!--Start rev slider wrapper-->
      <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
          <ul>
            <li data-transition="rs-20">
              <img
                src="images/slides/1.jpg"
                alt=""
                width="1920"
                height="700"
                data-bgposition="top center"
                data-bgfit="cover"
                data-bgrepeat="no-repeat"
                data-bgparallax="1"
              />

              <div
                class="tp-caption tp-resizeme"
                data-x="left"
                data-hoffset="0"
                data-y="top"
                data-voffset="220"
                data-transform_idle="o:1;"
                data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                data-start="1500"
              >
                <div class="slide-content-box mar-lft">
                  <h1>
                    Hospitals providing total<br />
                    healthcare <span>Solutions.</span>
                  </h1>
                  <p>
                    Denouncing pleasure and praising pain was born and we will
                    <br />give you a complete account of the system.
                  </p>
                  <div class="button">
                    <a class="#" href="#">Read More</a>
                    <a class="btn-style-two" href="#">Departments</a>
                  </div>
                </div>
              </div>
            </li>
            <li data-transition="fade">
              <img
                src="images/slides/2.jpg"
                alt=""
                width="1920"
                height="700"
                data-bgposition="top center"
                data-bgfit="cover"
                data-bgrepeat="no-repeat"
                data-bgparallax="1"
              />

              <div
                class="tp-caption tp-resizeme"
                data-x="right"
                data-hoffset="0"
                data-y="top"
                data-voffset="220"
                data-transform_idle="o:1;"
                data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                data-start="1500"
              >
                <div class="slide-content-box">
                  <h1>
                    Hospitals providing total<br />
                    healthcare <span>Solutions.</span>
                  </h1>
                  <p>
                    Denouncing pleasure and praising pain was born and we will
                    <br />give you a complete account of the system.
                  </p>
                  <div class="button">
                    <a class="#" href="#">Read More</a>
                    <a class="btn-style-two" href="#">Departments</a>
                  </div>
                </div>
              </div>
            </li>
            <li data-transition="fade">
              <img
                src="images/slides/3.jpg"
                alt=""
                width="1920"
                height="700"
                data-bgposition="top center"
                data-bgfit="cover"
                data-bgrepeat="no-repeat"
                data-bgparallax="1"
              />

              <div
                class="tp-caption tp-resizeme"
                data-x="left"
                data-hoffset="0"
                data-y="top"
                data-voffset="220"
                data-transform_idle="o:1;"
                data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on"
                data-start="1500"
              >
                <div class="slide-content-box mar-lft">
                  <h1>
                    Hospitals providing total<br />
                    healthcare <span>Solutions.</span>
                  </h1>
                  <p>
                    Denouncing pleasure and praising pain was born and we will
                    <br />give you a complete account of the system.
                  </p>
                  <div class="button">
                    <a class="#" href="#">Read More</a>
                    <a class="btn-style-two" href="#">Departments</a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!--End rev slider wrapper-->

      {{-- <!--Start call to action area-->
      <section class="callto-action-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-content">
                <div class="title-box text-center">
                  <span class="flaticon-calendar"></span>
                  <h2>@lang('pages.send_email')</h2>
                </div>
                <div class="form-holder clearfix">
                  <form
                    id="appointment"
                    class="clearfix"
                    name="appointment-form"
                    action="inc/sendmail.php"
                    method="post"
                  >
                    <div class="single-box mar-right-30">
                      <div class="input-box">
                        <input
                          type="text"
                          name="form_name"
                          value=""
                          placeholder="Your Name"
                          required=""
                        />
                      </div>
                      <div class="input-box">
                        <select class="selectmenu">
                          <option selected="selected">Select Doctor</option>
                          <option>Marc Parcival</option>
                          <option>Alen Bailey</option>
                          <option>Basil Andrew</option>
                          <option>Giles Franklin</option>
                          <option>Edgar Denzil</option>
                          <option>Garfield Feris</option>
                        </select>
                      </div>
                    </div>
                    <div class="single-box">
                      <div class="input-box">
                        <select class="selectmenu">
                          <option selected="selected">Select Department</option>
                          <option>Cardiology</option>
                          <option>Pulmonology</option>
                          <option>Gynecology</option>
                          <option>Neurology</option>
                          <option>Urology</option>
                          <option>Gastrology</option>
                          <option>Pediatrician</option>
                          <option>Laboratory</option>
                        </select>
                      </div>
                      <div class="input-box">
                        <input
                          type="text"
                          name="date"
                          placeholder="Select Date"
                          id="datepicker"
                        />
                        <div class="icon-box">
                          <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                    <button class="thm-btn bgclr-1" type="submit">
                      <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End call to action area--> --}}

      <!--Start Medical Departments area-->
      <section class="medical-departments-area">
        <div class="container">
          <div class="sec-title">
            <h1>@lang('pages.medical_departments')</h1>
            <span class="border"></span>
          </div>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="medical-departments-carousel">
                <!--Start single item-->
                <div class="single-item text-center">
                  <div class="iocn-holder">
                    <span class="flaticon-cardiology"></span>
                  </div>
                  <div class="text-holder">
                    <h3>Cardiology</h3>
                    <p>
                      How all this mistaken al idea of denouncing pleasure
                      praisings pain was complete.
                    </p>
                  </div>
                  <a class="readmore" href="#">Read More</a>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="single-item text-center">
                  <div class="iocn-holder">
                    <span class="flaticon-lungs"></span>
                  </div>
                  <div class="text-holder">
                    <h3>Pulmonology</h3>
                    <p>
                      Who chooses to enjoy a pleasure that has annoying
                      consquences, or one who avoids a pain.
                    </p>
                  </div>
                  <a class="readmore" href="#">Read More</a>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="single-item text-center">
                  <div class="iocn-holder">
                    <span class="flaticon-vagina"></span>
                  </div>
                  <div class="text-holder">
                    <h3>Gynecology</h3>
                    <p>
                      Who chooses to enjoy a pleasure that has annoying
                      consquences, or one who avoids a pain.
                    </p>
                  </div>
                  <a class="readmore" href="#">Read More</a>
                </div>
                <!--End single item-->
                <!--Start single item-->
                <div class="single-item text-center">
                  <div class="iocn-holder">
                    <span class="flaticon-neurology"></span>
                  </div>
                  <div class="text-holder">
                    <h3>Neurology</h3>
                    <p>
                      Who chooses to enjoy a pleasure that has annoying
                      consquences, or one who avoids a pain.
                    </p>
                  </div>
                  <a class="readmore" href="#">Read More</a>
                </div>
                <!--End single item-->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Medical Departments area-->

      <!--Start service area-->
      <section class="service-area">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="img-holder">
                <img src="images/services/doctor.jpg" alt="Awesome Image" />
                <div class="overlay-content">
                  <p>
                    As a tertiary referral ICU to provide state of the art care
                    with the help of very good professionals and infrastructure.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="text-holder">
                <!--Start tab box-->
                <div class="tab-box">
                  <div class="tab-content">
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="opthalmology">
                      <div class="inner-content">
                        <div class="sec-title">
                          <h1>@lang('pages.our_best_servicess')</h1>
                          <span class="border"></span>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="text-box">
                              <h3>Opthalmology Analysis</h3>
                              <p>
                                Explain to you how all this mistaken idea of
                                denouncing pleasure and praising pain was born
                                and I will give you a complete account of the
                                system, and expound the actual teachings of the
                                great explorer of the truth, the master-builder
                                of human happiness.
                              </p>
                              <a class="thm-btn" href="#">Read More</a>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="img-box">
                              <img
                                src="images/services/service-big-1.jpg"
                                alt="Awesome Image"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--End single tab pane-->
                    <!--Start single tab pane-->
                    <div class="tab-pane active" id="laboratory">
                      <div class="inner-content">
                        <div class="sec-title">
                          <h1>@lang('pages.our_best_servicess')</h1>
                          <span class="border"></span>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="text-box">
                              <h3>Laboratory Analysis</h3>
                              <p>
                                Explain to you how all this mistaken idea of
                                denouncing pleasure and praising pain was born
                                and I will give you a complete account of the
                                system, and the master-builder of human
                                happiness. Expound the actual teachings of the
                                great explorer of the truth.
                              </p>
                              <a class="thm-btn" href="#">Read More</a>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="img-box">
                              <img
                                src="images/services/service-big-2.jpg"
                                alt="Awesome Image"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--End single tab pane-->
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="cardiac">
                      <div class="inner-content">
                        <div class="sec-title">
                          <h1>@lang('pages.our_best_servicess')</h1>
                          <span class="border"></span>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="text-box">
                              <h3>Cardiac Clinic Analysis</h3>
                              <p>
                                Explain to you how all this mistaken idea of
                                denouncing pleasure and praising pain was born
                                and I will give you a complete account of the
                                system, and the master-builder of human
                                happiness. Expound the actual teachings of the
                                great explorer of the truth.
                              </p>
                              <a class="thm-btn" href="#">Read More</a>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="img-box">
                              <img
                                src="images/services/service-big-3.jpg"
                                alt="Awesome Image"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--End single tab pane-->
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="outpatient">
                      <div class="inner-content">
                        <div class="sec-title">
                          <h1>@lang('pages.our_best_servicess')</h1>
                          <span class="border"></span>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="text-box">
                              <h3>OutPatient Analysis</h3>
                              <p>
                                Explain to you how all this mistaken idea of
                                denouncing pleasure and praising pain was born
                                and I will give you a complete account of the
                                system, and the master-builder of human
                                happiness. Expound the actual teachings of the
                                great explorer of the truth.
                              </p>
                              <a class="thm-btn" href="#">Read More</a>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="img-box">
                              <img
                                src="images/services/service-big-4.jpg"
                                alt="Awesome Image"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--End single tab pane-->
                  </div>
                  <ul class="nav nav-tabs tab-menu">
                    <li>
                      <a href="#opthalmology" data-toggle="tab">
                        <div class="img-holder">
                          <img
                            src="images/services/service-small-1.jpg"
                            alt="Awesome Image"
                          />
                          <div class="overlay-style-one">
                            <div class="box">
                              <div class="content">
                                <div class="iocn-holder">
                                  <span class="flaticon-plus-symbol"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <h3>Opthalmology</h3>
                    </li>
                    <li class="active">
                      <a href="#laboratory" data-toggle="tab">
                        <div class="img-holder">
                          <img
                            src="images/services/service-small-2.jpg"
                            alt="Awesome Image"
                          />
                          <div class="overlay-style-one">
                            <div class="box">
                              <div class="content">
                                <div class="iocn-holder">
                                  <span class="flaticon-plus-symbol"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <h3>Laboratory</h3>
                    </li>
                    <li>
                      <a href="#cardiac" data-toggle="tab">
                        <div class="img-holder">
                          <img
                            src="images/services/service-small-3.jpg"
                            alt="Awesome Image"
                          />
                          <div class="overlay-style-one">
                            <div class="box">
                              <div class="content">
                                <div class="iocn-holder">
                                  <span class="flaticon-plus-symbol"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <h3>Cardiac Clinic</h3>
                    </li>
                    <li>
                      <a href="#outpatient" data-toggle="tab">
                        <div class="img-holder">
                          <img
                            src="images/services/service-small-4.jpg"
                            alt="Awesome Image"
                          />
                          <div class="overlay-style-one">
                            <div class="box">
                              <div class="content">
                                <div class="iocn-holder">
                                  <span class="flaticon-plus-symbol"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>
                      <h3>OutPatient</h3>
                    </li>
                  </ul>
                </div>
                <!--End tab box-->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End service area-->

      <!--Start team area-->
      <section class="team-area">
        <div class="container">
          <div class="sec-title">
            <h1>@lang('pages.team_of_consultunts')</h1>
            <span class="border"></span>
          </div>
          <div class="row">
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="single-team-member">
                <div class="img-holder">
                  <img src="images/team/1.jpg" alt="Awesome Image" />
                  <div class="overlay-style">
                    <div class="box">
                      <div class="content">
                        <div class="top">
                          <h3>Marc Parcival</h3>
                          <span>Newyork</span>
                        </div>
                        <span class="border"></span>
                        <div class="bottom">
                          <ul>
                            <li>
                              <i class="fa fa-phone" aria-hidden="true"></i>
                              +321 567 89 0123
                            </li>
                            <li>
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              Bailey@Hospitals.com
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-holder">
                    <h3>Marc Parcival</h3>
                    <span>Newyork</span>
                  </div>
                </div>
              </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="single-team-member">
                <div class="img-holder">
                  <img src="images/team/2.jpg" alt="Awesome Image" />
                  <div class="overlay-style">
                    <div class="box">
                      <div class="content">
                        <div class="top">
                          <h3>Alen Bailey</h3>
                          <span>Newyork</span>
                        </div>
                        <span class="border"></span>
                        <div class="bottom">
                          <ul>
                            <li>
                              <i class="fa fa-phone" aria-hidden="true"></i>
                              +321 567 89 0123
                            </li>
                            <li>
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              Bailey@Hospitals.com
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-holder">
                    <h3>Marc Parcival</h3>
                    <span>Newyork</span>
                  </div>
                </div>
              </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="single-team-member">
                <div class="img-holder">
                  <img src="images/team/3.jpg" alt="Awesome Image" />
                  <div class="overlay-style">
                    <div class="box">
                      <div class="content">
                        <div class="top">
                          <h3>Basil Andrew</h3>
                          <span>Newyork</span>
                        </div>
                        <span class="border"></span>
                        <div class="bottom">
                          <ul>
                            <li>
                              <i class="fa fa-phone" aria-hidden="true"></i>
                              +321 567 89 0123
                            </li>
                            <li>
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              Bailey@Hospitals.com
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-holder">
                    <h3>Marc Parcival</h3>
                    <span>Newyork</span>
                  </div>
                </div>
              </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="single-team-member">
                <div class="img-holder">
                  <img src="images/team/4.jpg" alt="Awesome Image" />
                  <div class="overlay-style">
                    <div class="box">
                      <div class="content">
                        <div class="top">
                          <h3>Edgar Denzil</h3>
                          <span>Newyork</span>
                        </div>
                        <span class="border"></span>
                        <div class="bottom">
                          <ul>
                            <li>
                              <i class="fa fa-phone" aria-hidden="true"></i>
                              +321 567 89 0123
                            </li>
                            <li>
                              <i class="fa fa-envelope" aria-hidden="true"></i>
                              Bailey@Hospitals.com
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-holder">
                    <h3>Edgar Denzil</h3>
                    <span>Newyork</span>
                  </div>
                </div>
              </div>
            </div>
            <!--End single item-->
          </div>
        </div>
      </section>
      <!--End team area-->

      <!--Start fact counter area-->
      <section
        class="fact-counter-area"
        style="background-image: url(images/resources/fact-counter-bg.jpg)"
      >
        <div class="container">
          <div class="sec-title text-center">
            <h1>Keep your headup & be patient</h1>
            <p>
              How all this mistaken idea of denouncing pleasure and praising
              pain was born and I will give you a complete account of the<br />
              system and expound the actual teachings of the great.
            </p>
          </div>
          <div class="row">
            <!--Start single item-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <ul>
                <li>
                  <div class="single-item text-center">
                    <div class="icon-holder">
                      <span class="flaticon-medical"></span>
                    </div>
                    <h1>
                      <span
                        class="timer"
                        data-from="1"
                        data-to="25"
                        data-speed="5000"
                        data-refresh-interval="50"
                        >25</span
                      >
                    </h1>
                    <h3>Years of Experience</h3>
                  </div>
                </li>
                <li>
                  <div class="single-item text-center">
                    <div class="icon-holder">
                      <span class="flaticon-smile"></span>
                    </div>
                    <h1>
                      <span
                        class="timer"
                        data-from="1"
                        data-to="284"
                        data-speed="5000"
                        data-refresh-interval="50"
                        >284</span
                      >
                    </h1>
                    <h3>Well Smiley Faces</h3>
                  </div>
                </li>
                <li>
                  <div class="single-item text-center">
                    <div class="icon-holder">
                      <span class="flaticon-medical-1"></span>
                    </div>
                    <h1>
                      <span
                        class="timer"
                        data-from="1"
                        data-to="176"
                        data-speed="5000"
                        data-refresh-interval="50"
                        >176</span
                      >
                    </h1>
                    <h3>Heart Transplant</h3>
                  </div>
                </li>
                <li>
                  <div class="single-item text-center">
                    <div class="icon-holder">
                      <span class="flaticon-ribbon"></span>
                    </div>
                    <h1>
                      <span
                        class="timer"
                        data-from="1"
                        data-to="142"
                        data-speed="5000"
                        data-refresh-interval="50"
                        >142</span
                      >
                    </h1>
                    <h3>Awards Holded</h3>
                  </div>
                </li>
              </ul>
            </div>
            <!--End single item-->
          </div>
        </div>
      </section>
      <!--End fact counter area-->

      <!--Start testimonial area-->
      <section class="testimonial-area">
        <div class="container">
          <div class="sec-title mar0auto text-center">
            <h1>@lang('pages.what_clients_say')</h1>
            <span class="border"></span>
          </div>
          <div class="row">
            <!--Start single item-->
            <div class="col-md-12">
              <div class="testimonial-carousel">
                <!--Start single testimonial item-->
                <div class="single-testimonial-item text-center">
                  <div class="img-box">
                    <div class="img-holder">
                      <img src="images/testimonial/1.png" alt="Awesome Image" />
                    </div>
                    <div class="quote-box">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="text-holder">
                    <p>
                      Mistaken idea of denouncing pleasure and praising pain was
                      born and I will give you a complete account of the system.
                    </p>
                  </div>
                  <div class="name">
                    <h3>Rossy Miranda</h3>
                    <span>Newyork</span>
                  </div>
                </div>
                <!--End single testimonial item-->
                <!--Start single testimonial item-->
                <div class="single-testimonial-item text-center">
                  <div class="img-box">
                    <div class="img-holder">
                      <img src="images/testimonial/2.png" alt="Awesome Image" />
                    </div>
                    <div class="quote-box">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="text-holder">
                    <p>
                      The master-builder of human happiness one rejects,
                      dislikes, or avoids pleasure itself, because it is
                      pleasure pursue.
                    </p>
                  </div>
                  <div class="name">
                    <h3>Peter Lawrence</h3>
                    <span>California</span>
                  </div>
                </div>
                <!--End single testimonial item-->
                <!--Start single testimonial item-->
                <div class="single-testimonial-item text-center">
                  <div class="img-box">
                    <div class="img-holder">
                      <img src="images/testimonial/1.png" alt="Awesome Image" />
                    </div>
                    <div class="quote-box">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="text-holder">
                    <p>
                      Mistaken idea of denouncing pleasure and praising pain was
                      born and I will give you a complete account of the system.
                    </p>
                  </div>
                  <div class="name">
                    <h3>Rossy Miranda</h3>
                    <span>Newyork</span>
                  </div>
                </div>
                <!--End single testimonial item-->
                <!--Start single testimonial item-->
                <div class="single-testimonial-item text-center">
                  <div class="img-box">
                    <div class="img-holder">
                      <img src="images/testimonial/2.png" alt="Awesome Image" />
                    </div>
                    <div class="quote-box">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="text-holder">
                    <p>
                      The master-builder of human happiness one rejects,
                      dislikes, or avoids pleasure itself, because it is
                      pleasure pursue.
                    </p>
                  </div>
                  <div class="name">
                    <h3>Peter Lawrence</h3>
                    <span>California</span>
                  </div>
                </div>
                <!--End single testimonial item-->
                <!--Start single testimonial item-->
                <div class="single-testimonial-item text-center">
                  <div class="img-box">
                    <div class="img-holder">
                      <img src="images/testimonial/1.png" alt="Awesome Image" />
                    </div>
                    <div class="quote-box">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="text-holder">
                    <p>
                      Mistaken idea of denouncing pleasure and praising pain was
                      born and I will give you a complete account of the system.
                    </p>
                  </div>
                  <div class="name">
                    <h3>Rossy Miranda</h3>
                    <span>Newyork</span>
                  </div>
                </div>
                <!--End single testimonial item-->
                <!--Start single testimonial item-->
                <div class="single-testimonial-item text-center">
                  <div class="img-box">
                    <div class="img-holder">
                      <img src="images/testimonial/2.png" alt="Awesome Image" />
                    </div>
                    <div class="quote-box">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="text-holder">
                    <p>
                      The master-builder of human happiness one rejects,
                      dislikes, or avoids pleasure itself, because it is
                      pleasure pursue.
                    </p>
                  </div>
                  <div class="name">
                    <h3>Peter Lawrence</h3>
                    <span>California</span>
                  </div>
                </div>
                <!--End single testimonial item-->
              </div>
            </div>
            <!--End single item-->
          </div>
        </div>
      </section>
      <!--End testimonial area-->

    
    
@endsection