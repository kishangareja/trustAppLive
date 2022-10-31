@extends('master_layout.main')
@section('content')

    <div class="scrollmenu">
        <div class="owl-carousel" id="scroll_menu">
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-1.png') }}" alt=""> Fashion</a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-2.jpg') }}" alt=""> Electronics
                </a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-3.jpg') }}" alt=""> Appliances
                </a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-4.jpg') }}" alt=""> Repair
                </a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-5.jpg') }}" alt=""> Home
                </a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-6.jpg') }}" alt=""> Grooming
                </a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-7.png') }}" alt=""> Home
                </a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-8.jpg') }}" alt=""> Travel
                </a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-5.jpg') }}" alt=""> Repair
                </a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-9.jpg') }}" alt=""> Vegetables</a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-10.jpg') }}" alt=""> Grocery</a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-11.jpg') }}" alt=""> Self jobs</a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-12.jpg') }}" alt=""> Vehicle care</a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-13.jpg') }}" alt=""> Food</a>
            </div>
            <div class="item">
                <a class="nav-link" href="#">
                    <img class="header_icons" src="{{ asset('public/images/header_icons/menu-14.jpg') }}" alt=""> Repair</a>
            </div>
        </div>
    </div>

    <section class="banner">
        <div class="home-demo">
            <div class="owl-carousel" id="bannerslider">
                <div class="item">
                    <img src="{{ asset('public/images/slide1.jpg') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('public/images/slide1.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="boximg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-md-3">
                    <a href=""><img src="{{ asset('public/images/mobile-app-agencies.jpg') }}" alt=""></a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="ajax-loader">
                        <img src="{{ asset('public/images/loader1.gif') }}" class="img-responsive" />
                    </div>
                    <div class="catediv">
                        
                        <!-- div1 Start here -->   
                        <div class="div1" >   
                            <div class="searchbox1">                          
                               <label>One app for all business</label>                  
                            </div>                                                         
                            {{-- <div class="slider round">
                                <span class="slider_text">                                        
                                    <span class="off" onclick="CategoryList(this)" id="Essential">Service Home</span>
                                    <span class="on" onclick="CategoryList(this)" id="BusinessEssential">Business Home</span>       
                                </span> 
                            </div> --}}
                                {{-- <button class="on" onclick="CategoryList(this)" id="Tools">Tools</button> --}}
                                {{--  --}}
                            <div class="switch-field">
                                <input type="checkbox" id="toggle_vat" class="toggle_vat">
                                <input type="radio" id="Essential" name="switch-two" onchange="CategoryList(this)" checked>
                                <label for="Essential" id="es">Service Home</label>
                                <input type="radio" id="BusinessEssential" name="switch-two"  onchange="CategoryList(this)">
                                <label for="BusinessEssential" id="bues" style="border-left: 2px solid #de6570;">Business Home</label>
                                <input type="radio" id="Tools" name="switch-two" onchange="CategoryList(this)">
                                <label for="Tools" id="too" style="border-left: 2px solid #de6570;">Tools</label>
                            </div>                                                                  
                            <ul class="catelist" id="showEssential"></ul>
                            <ul class="catelist" id="showBusinessEssential" style="display: none;"></ul>
                            <ul class="catelist" id="showTools" style="display: none;"></ul>
                        </div>
                        <!-- div1 End here -->         

                        <!-- div2 Start here -->
                        <div class="div2" style="display: none;">
                            <div class="searchbox1">                          
                               <label>Bid & get services</label>                  
                            </div>  
                            <button class="backbtn"><i class="fas fa-arrow-left"></i></button>
                            <span class="div4-sub-cat-name"><strong id="category_name"></strong></span>
                            <span id="showpropertytypes"></span>
                            <p style="color: #3197EE;margin-top: 50px;"><strong>Need more category or sub-categories suitable for your profession? Click Help (?) button on Home Page to contact Trust Support.</strong></p>
                        </div>
                        <!-- div2 End here -->

                        <!-- div3 Start here -->
                        <div class="div3" style="display: none;">
                            <div class="searchbox1">                          
                               <label>Bid & get services</label>                  
                            </div>  
                            <button class="backbtn"><i class="fas fa-arrow-left"></i></button>
                            <span class="div4-sub-cat-name"><strong id="">FILTER</strong></span>
                            <div class="support">
                                <span id="filter_name"></span>
                                <p><strong>Need more category or sub-categories suitable for your profession? Click Help (?) button on Home Page to contact Trust Support.</strong></p>
                            </div>
                        </div>
                        <!-- div3 End here -->
                        
                        {{-- searchbox start --}}
                        <div class="searchbox" style="display: none;">                          
                            <select class="form-control select2" >
                                @foreach ($fetchCityList['data'] as $item)
                                    <option value="{{$item['id']}}" data-lat="{{$item['latitude']}}" data-lng="{{$item['longitude']}}">{{$item['name']}}</option>      
                                @endforeach
                            </select>                         
                        </div>   
                        {{-- searchbox end --}}

                        <!-- div4 Start here -->                                                     
                        <div class="div4">
                            <div class="btndiv">
                                <button class="backbtn"><i class="fas fa-arrow-left"></i></button>                                
                                <img src="{{ asset('public/images/icons/icon_map.png') }}" style="width: 25px;height: 25px;cursor: pointer;" class="mapbtn" onclick="checkDivSection('mapdiv')">
                            </div>
                            <div class="course_sidebar">
                                {{-- <aside><i class="far fa-truck"></i><span id="cat_name"></span></aside> --}}
                                <span class="div4-sub-cat-name">
                                    {{-- <i class="far fa-truck"></i>&nbsp; --}}
                                    <img src="#" class="provider_icons" id="cat_img">
                                    <strong id="cat_name"></strong>
                                </span>
                                <ul id="provider_details">
                                </ul>
                                <div class="vgri_guarnt">
                                    <span class="Verified"><i class="fas fa-badge-check"></i> Verified</span>
                                    <span class="Guarantee"><i class="fas fa-star"></i> 100% Guarantee</span>
                                </div>
                            </div>
                        </div>
                        <!-- div4 End here -->    

                        <!-- div5 Start here -->
                        <div class="div5">                                                                                   
                            <div class="btndiv" onclick="checkDivSection('listdiv')">
                                <button class="backbtn"><i class="fas fa-arrow-left"></i></button>
                                <i class="far fa-bars barbtn"></i>
                            </div>
                            <div id="wrapper">
                                <div class="map" id="map"></div>                                
                                <div class="course_sidebar mapcourse_sidebar" id="over_map"></div>    
                            </div>
                        </div>
                        <!-- div5 End here -->   
 
                        <!-- div6 Start here -->
                        <div class="div6" style="display: none";>
                            <button class="backbtn"><i class="fas fa-arrow-left"></i></button> 
                            {{-- onclick="backbtn(this) --}}
                            <span><strong id="">PROVIDER DETAILS</strong></span>
                            <span id="single_provider_details"></span>
                        </div>
                        <!-- div6 End here -->

                        {{-- dib7 starts here --}}
                        <div class="div7" style="display: none";>
                            <button class="backbtn"><i class="fas fa-arrow-left"></i></button> 
                            {{-- onclick="backbtn(this) --}}
                            <span><strong id="toolTitle"></strong></span>
                            <span id="shared_trips">
                                <ul class="joblist" style="margin-top: 15px;" id="joblist"></ul>
                            </span>
                        </div>
                        {{-- dib7 end here --}}
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-3">
                    <a href=""><img src="{{ asset('public/images/mobile-app-agencies.jpg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </section>

    <section class="comnpadding we_are">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center headingdiv">
                        <h2 class="comnheading">WE ARE <span>Everywhere!</span></h2>
                        <p>Any place in India you can get services from Trust service providers! </p>
                    </div>
                    <div class="appdiv">
                        <a href="https://play.google.com/store/apps/details?id=com.trustapp" target="_blank">
                            <img src="{{ asset('public/images/play-store.png') }}">
                        </a>
                        <a href="https://itunes.apple.com/us/app/apple-store/id1479704788?mt=8" target="_blank">
                            <img src="{{ asset('public/images/apple-app-store.png') }}" style="max-width: 182px;height: 64px;">
                        </a>
                    </div>
                    <p><strong>*To list your business, bid services and booking services, please use our Android version
                            <img width="15px" class="emoji" alt="🙂"
                                src="{{ asset('public/images/smile.svg') }}"> iOS
                            and website version will be updated very soon!&nbsp;</strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="logodiv">
                        <div class="text-center headingdiv">
                            <h2 class="comnheading">WE ARE NOW <span>PROUDLY </span>PART OF</h2>
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/images/part-1.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/images/part-2.webp') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/images/part-3.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/images/part-4.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/images/part-5.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/images/awsactivate.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('public/images/apc.png') }}" alt="" width="200" height="200">
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="comnpadding signup">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center headingdiv">
                        <h2 class="comnheading">SIGNUP FOR <span>UPDATES!</span></h2>
                        <p>We are growing across India and we would be happy to have you in our growing community! </p>
                    </div>
                    <form action="">
                        <input type="email" placeholder="Your Email " value="">
                        <aside>We know that you hate spams, so do we! </aside>
                        <button> Notify me! </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class=" followus">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center headingdiv">
                        <h2 class="comnheading">FOLLOW US <span>ON!</span></h2>
                    </div>
                    <div class="social">
                        <a href="https://www.facebook.com/trust.cloudai" target="_blank" class="fab fa-facebook fbbg"></a>
                        <a href="https://www.instagram.com/trust_app/" target="_blank" class="fab fa-instagram twbgInsta"></a>
                        <a href="https://www.youtube.com/playlist?list=PLGPpgDt6rdY99nCCp3eSSMCpYtSS7ZiwE" target="_blank" class="fab fa-youtube twbgYoutube"></a>
                        <a href="https://twitter.com/trust__app" target="_blank" class="fab fa-twitter twbg"></a>
                        <a href="https://www.linkedin.com/company/trust-mobile-app/" target="_blank" class="fab fa-linkedin inbg"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="together">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Let's make a Trusted service network, together!</h3>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="popup_slider" class="owl-carousel pg"></div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal pg fade" id="popupslidersingle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"> 
            <div class="modal-content pg">
                <div id="popup_slider_single" class=""></div>
            </div>
        </div>
    </div>
    {{-- style="margin-top: 10%;margin-left: -6px;" --}}

    {{-- WhatsApp Modal --}}
    <div class="modal fade" id="whatsappModalCenter" tabindex="-1" role="dialog" aria-labelledby="whatsappModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="border-radius: 20px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="whatsappModalLongTitle">WhatsApp anyone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="">
                    <div class="form-group">                              
                        <div class="input-group">
                            <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="Recipient's 10 digit mobile number" maxlength="10">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="whatsappSubmit"><i class="fa fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-primary" >Send</button>
                </div> --}}
            </div>
        </div>
    </div>
@endsection