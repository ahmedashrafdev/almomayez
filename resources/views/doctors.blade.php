@extends('layouts.app')

@section('title', $title)
@section('page', $title)


@section('content')


<!--Start team area-->
<section class="team-area doctor doctor-page-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-tabs tab-menu">
                    <li><a href="#cardiologist" data-toggle="tab">Cardiologist</a></li>
                    <li class="active"><a href="#gynaecologist" data-toggle="tab">Gynaecologist</a></li>
                    <li><a href="#neurologist" data-toggle="tab">Neurologist</a></li>
                    <li><a href="#ophthalmologist" data-toggle="tab">Ophthalmologist</a></li>
                    <li><a href="#paediatrician" data-toggle="tab">Paediatrician</a></li>
                    <li><a href="#practitioner" data-toggle="tab">General Practitioner</a></li>
                </ul>   
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="cardiologist">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/1.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Prof. & HOD</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Marc Parcival</h3> 
                                            <span>Prof. & HOD</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/2.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Alen Bailey</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/3.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/4.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asst.Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Giles Franklin</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/5.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Edgar Denzil</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/6.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Sr Resident</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Garfield Feris</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/7.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Sr Resident</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Marc Parcival</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/8.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Asst.Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Alen Bailey</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/9.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/10.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Giles Franklin</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/11.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Edgar Denzil</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/12.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Garfield Feris</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End single tab pane-->
                    
                    <!--Start single tab pane-->
                    <div class="tab-pane active" id="gynaecologist">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/4.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asst.Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Giles Franklin</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/5.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Edgar Denzil</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/6.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Sr Resident</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Garfield Feris</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/7.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Sr Resident</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Marc Parcival</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/8.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Asst.Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Alen Bailey</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/9.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/10.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Giles Franklin</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/11.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Edgar Denzil</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/12.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Garfield Feris</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/1.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Prof. & HOD</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Marc Parcival</h3> 
                                            <span>Prof. & HOD</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/2.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Alen Bailey</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/3.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End single tab pane-->
                    
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="neurologist">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/6.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Sr Resident</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Garfield Feris</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/4.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asst.Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Giles Franklin</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/5.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Edgar Denzil</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/7.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Sr Resident</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Marc Parcival</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/8.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Asst.Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Alen Bailey</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/9.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/10.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Giles Franklin</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/11.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Edgar Denzil</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/12.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Garfield Feris</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/1.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Prof. & HOD</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Marc Parcival</h3> 
                                            <span>Prof. & HOD</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/2.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Alen Bailey</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/3.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End single tab pane-->
                    
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="ophthalmologist">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/5.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Edgar Denzil</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                             <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/4.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asst.Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Giles Franklin</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/6.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Sr Resident</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Garfield Feris</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/7.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Sr Resident</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Marc Parcival</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/8.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Asst.Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Alen Bailey</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/9.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/10.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Giles Franklin</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/11.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Edgar Denzil</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/12.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Garfield Feris</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/1.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Prof. & HOD</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Marc Parcival</h3> 
                                            <span>Prof. & HOD</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/2.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Alen Bailey</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/3.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End single tab pane-->
                    
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="paediatrician">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/4.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asst.Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Giles Franklin</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/5.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Edgar Denzil</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/6.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Sr Resident</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Garfield Feris</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/7.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Sr Resident</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Marc Parcival</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/8.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Asst.Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Alen Bailey</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/9.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/10.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Giles Franklin</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/11.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Edgar Denzil</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/12.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Garfield Feris</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/1.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Prof. & HOD</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Marc Parcival</h3> 
                                            <span>Prof. & HOD</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/2.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Alen Bailey</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/3.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End single tab pane-->
                    
                    <!--Start single tab pane-->
                    <div class="tab-pane" id="practitioner">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/6.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Sr Resident</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Garfield Feris</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/7.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Sr Resident</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Marc Parcival</h3> 
                                            <span>Sr Resident</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/8.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Asst.Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Alen Bailey</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/9.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/10.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Giles Franklin</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/11.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Edgar Denzil</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/12.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Garfield Feris</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Garfield Feris</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/4.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Giles Franklin</h3>
                                                        <span>Asst.Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Giles Franklin</h3> 
                                            <span>Asst.Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/5.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Edgar Denzil</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Edgar Denzil</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/1.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Marc Parcival</h3>
                                                        <span>Prof. & HOD</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Marc Parcival</h3> 
                                            <span>Prof. & HOD</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/2.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Alen Bailey</h3>
                                                        <span>Professor</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Alen Bailey</h3> 
                                            <span>Professor</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="single-team-member">
                                    <div class="img-holder">
                                        <img src="images/team/3.jpg" alt="Awesome Image">
                                        <div class="overlay-style">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="top">
                                                        <h3>Basil Andrew</h3>
                                                        <span>Asso. Prof</span>
                                                    </div>
                                                    <span class="border"></span>
                                                    <div class="bottom">
                                                        <ul>
                                                            <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                        </ul>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Basil Andrew</h3> 
                                            <span>Asso. Prof</span>   
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                    <!--End single tab pane-->
                    
                </div>
            </div>
        </div>
    </div>
</section> 
<!--End team area--> 

@endsection
