@extends('layouts.main')


@section('content')
              
    <!-- hero-wrap-->	
    <div class="hero-wrap fl-wrap full-height" data-scrollax-parent="true">
        <!--multi-slideshow-wrap_1 -->
        <div class="multi-slideshow-wrap_fs" data-scrollax="properties: { translateY: '30%' }">
            <div class="full-height fl-wrap">
                <!--ms-container-->
                <div class="multi-slideshow_fs ms-container fl-wrap full-height">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--ms_item-->
                            <div class="swiper-slide">
                                <div class="ms-item_fs fl-wrap">
                                    <div class="bg" data-bg="images/bg/19.jpg"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <!--ms_item end-->
                            <!--ms_item-->
                            <div class="swiper-slide ">
                                <div class="ms-item_fs fl-wrap">
                                    <div class="bg" data-bg="images/bg/1.jpg"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <!--ms_item end-->
                            <!--ms_item-->
                            <div class="swiper-slide">
                                <div class="ms-item_fs fl-wrap">
                                    <div class="bg" data-bg="images/bg/7.jpg"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <!--ms_item end-->                                                 
                        </div>
                    </div>
                </div>
                <!--ms-container end-->
            </div>
            <div class="hiddec-anim"></div>
        </div>
        <!--multi-slideshow-wrap_1 end-->                       
        <div class="hero-title-wrap fl-wrap">
            <div class="container">
                <div class="hero-title">
                    <h4>Top Services and Premium Cuisine </h4>
                    <h2>Welcome to Restabook Restaurant</h2>
                    <a href="menu.html" class="hero_btn">Check out our Menu <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <!--hero_promo-wrap-->
        <div class="hero_promo-wrap bot-element2">
            <div class="hero_promo-button">
                <a href="https://vimeo.com/10322316" class="image-popup"><i class="fas fa-play"></i></a>
            </div>
            <div class="hero_promo-title">
                <h4>View Promo Video</h4>
            </div>
        </div>
        <!--hero_promo-wrap end--> 
        <!--hero-social-->
        <div class="hero-social">
            <ul>
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
            </ul>
        </div>
        <!--hero-social end--> 
        <!-- hero-bottom-container -->	
        <div class="hero-bottom-container">
            <div class="container">
                <div class="scroll-down-wrap">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                    <span>Scroll down to Discover</span>
                </div>
                <a href="#sec2" class="sd_btn custom-scroll-link"><i class="fal fa-chevron-double-down"></i></a>
            </div>
        </div>
        <!-- hero-bottom-container -->	
        <div class="hero-dec_top"></div>
        <div class="hero-dec_bottom"></div>
        <div class="brush-dec"></div>
    </div>
    <!-- hero-wrap  end -->	
    <!-- content  -->	
    <div class="content">
        <section class="hidden-section big-padding" data-scrollax-parent="true" id="sec2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title text-align_left">
                            <h4>Our story</h4>
                            <h2>Few words about us</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="text-block ">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.
                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.
                            </p>
                            <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                            <a href="menu.html" class="btn fl-btn">Explore Our Menu<i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-collge-wrap fl-wrap">
                            <div class="main-iamge">
                                <img src="images/all/3.jpg"   alt="">
                            </div>
                            <div class="images-collage-item" style="width:65%" data-position-left="68" data-position-top="-15" data-zindex="2" data-opacity="1.0"><img src="images/all/8.jpg" alt=""></div>
                            <div class="images-collage-item col_par" style="width:120px" data-position-left="-23" data-position-top="-17" data-zindex="9" data-scrollax="properties: { translateY: '150px' }"><img src="images/cube.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="section-dec sec-dec_top"></div>
                <div class="wave-bg" data-scrollax="properties: { translateY: '-150px' }"></div>							
            </div>
        </section>
        <!--  section end  -->   
        <!-- section   -->
        <section class="column-section no-padding hidden-section" data-scrollax-parent="true" id="sec4">
            <div class="column-wrap-bg left-wrap">
                <div class="bg par-elem "  data-bg="images/bg/12.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="quote-box">
                    <i class="fal fa-quote-right"></i>
                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi accusantium."</p>
                    <div class="signature"><img src="images/signature.png" alt=""></div>
                    <h4>Kevin  Kowalsky - Restaurant’s cheaf</h4>
                </div>
            </div>
            <div class="column-section-wrap dark-bg" >
                <div class="container"  >
                    <div class="column-text">
                        <div class="section-title">
                            <h4>Call For Reservations</h4>
                            <h2>Opening Hours</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="work-time fl-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Sunday to Tuesday</h3>
                                    <div class="hours">
                                        09:00<br>
                                        22:00
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3>Friday to Saturday</h3>
                                    <div class="hours">
                                        11:00<br>
                                        19:00
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="bold-separator"><span></span></div>
                        <div class="big-number"><a href="#">+7(111)123456789</a></div>
                    </div>
                </div>
                <div class="illustration_bg">
                    <div class="bg"  data-bg="images/bg/dec/7.png"></div>
                </div>
            </div>
        </section>
        <!-- section end -->
        <!--  section    -->   
        <section data-scrollax-parent="true">
            <div class="container">
                <div class="section-title">
                    <h4>Why people choose us</h4>
                    <h2>Prepare for first-class service</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
                <div class="cards-wrap fl-wrap">
                    <div class="row">
                        <!--card item --> 
                        <div class="col-md-4">
                            <div class="content-inner fl-wrap">
                                <div class="content-front">
                                    <div class="cf-inner">
                                        <div class="bg "  data-bg="images/services/1.jpg"></div>
                                        <div class="overlay"></div>
                                        <div class="inner">
                                            <h2>Daily New Fresh Menus</h2>
                                            <h4>Start eating better</h4>
                                        </div>
                                        <div class="serv-num">01.</div>
                                    </div>
                                </div>
                                <div class="content-back">
                                    <div class="cf-inner">
                                        <div class="inner">
                                            <div class="dec-icon">
                                                <i class="fal fa-fish"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--card item end -->
                        <!--card item --> 
                        <div class="col-md-4">
                            <div class="content-inner fl-wrap">
                                <div class="content-front">
                                    <div class="cf-inner">
                                        <div class="bg "  data-bg="images/services/2.jpg"></div>
                                        <div class="overlay"></div>
                                        <div class="inner">
                                            <h2>Fresh Ingredient, Tasty Meals</h2>
                                            <h4>Quality is the heart</h4>
                                        </div>
                                        <div class="serv-num">02.</div>
                                    </div>
                                </div>
                                <div class="content-back">
                                    <div class="cf-inner">
                                        <div class="inner">
                                            <div class="dec-icon">
                                                <i class="fal fa-carrot"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--card item end -->
                        <!--card item --> 
                        <div class="col-md-4">
                            <div class="content-inner fl-wrap">
                                <div class="content-front">
                                    <div class="cf-inner">
                                        <div class="bg "  data-bg="images/services/3.jpg"></div>
                                        <div class="overlay"></div>
                                        <div class="inner">
                                            <h2>Creative & Talented Chefs</h2>
                                            <h4>Hot & ready to serve</h4>
                                        </div>
                                        <div class="serv-num">03.</div>
                                    </div>
                                </div>
                                <div class="content-back">
                                    <div class="cf-inner">
                                        <div class="inner">
                                            <div class="dec-icon">
                                                <i class="fal fa-utensils-alt"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--card item end -->                                                 
                    </div>
                    <div class="section-dec sec-dec_top"></div>
                    <div class="section-dec sec-dec_bottom"></div>
                </div>
                <a href="about.html" class="btn fl-btn border-btn">Read More About us <i class="fal fa-long-arrow-right"></i></a>
                <div class="images-collage-item col_par" style="width:120px" data-position-left="83" data-position-top="87" data-zindex="1" data-scrollax="properties: { translateY: '150px' }"><img src="images/cube.png" alt=""></div>
            </div>
            <div class="section-bg">
                <div class="bg"  data-bg="images/bg/dec/section-bg.png"></div>
            </div>
        </section>
        <!--  section end  --> 
        <!--  section  -->
        <section class="parallax-section dark-bg hidden-section" data-scrollax-parent="true">
            <div class="brush-dec2"></div>
            <div class="brush-dec"></div>
            <div class="bg par-elem bg_tabs"  data-bg="images/bg/4.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="cd-tabs-layer" data-frame="10">
                <div class="tabs-layer"></div>
            </div>
            <div class="overlay op7"></div>
            <div class="container">
                <div class="section-title">
                    <h4>Special menu offers.</h4>
                    <h2>Enjoy Restaurants Specialties</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
                <!--  hero-menu_header  end-->
                <div class="hero-menu tabs-act fl-wrap">
                    <div class="row">
                        <!--  hero-menu_header-->
                        <div class="col-md-3">
                            <div class="hero-menu_header fl-wrap">
                                <ul class="tabs-menu     no-list-style change_bg">
                                    <li class="current"><a href="#tab-1" data-bgtab="images/bg/4.jpg"><span>01.</span>Main dishes</a></li>
                                    <li><a href="#tab-2" data-bgtab="images/bg/6.jpg"><span>02.</span>Starter</a></li>
                                    <li><a href="#tab-3" data-bgtab="images/bg/7.jpg"><span>03.</span>Desserts</a></li>
                                    <li><a href="#tab-4" data-bgtab="images/bg/5.jpg"><span>04.</span>Sea Food</a></li>
                                    <li><a href="#tab-5" data-bgtab="images/bg/9.jpg"><span>05.</span>Drinks</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--  hero-menu_header  end-->
                        <!--  hero-menu_content   -->
                        <div class="col-md-9">
                            <div class="hero-menu_content fl-wrap">
                                <div class="tabs-container">
                                    <div class="tab">
                                        <!--tab -->
                                        <div id="tab-1" class="tab-content first-tab">
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>01.</span>Soft shell crab</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$29</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Granny help you treat yourself with a different meal everyday</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>02.</span>Miso chicken</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$19</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->                                                         
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>03.</span>Fish pie</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$12</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>usce tempus tempus maximus volutpat</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->                                                         
                                            <!-- header-menu-item-->
                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>04.</span>Salmon riverland</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">$105</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet</p>
                                                </div>
                                            </div>
                                            <!-- header-menu-item end-->                                                         
                                        </div>
                                        <!--tab end -->
                                        <!--tab 2-->
                                        <div class="tab">
                                            <div id="tab-2" class="tab-content">
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>01.</span>Fried Potatoes</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$29</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>Granny help you treat yourself with a different meal everyday</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>02.</span>Doner Burger</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$19</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->                                                         
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>03.</span>Steak Filet</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$12</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>usce tempus tempus maximus volutpat</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->                                                         
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>04.</span>Cayenne Shrimp</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$37</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>usce tempus tempus maximus volutpat</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->                                                          
                                            </div>
                                        </div>
                                        <!--tab end -->
                                        <!--tab 3-->
                                        <div class="tab">
                                            <div id="tab-3" class="tab-content">
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>01.</span>Soft shell crab</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$29</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>Granny help you treat yourself with a different meal everyday</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>02.</span>Tarte Tatin</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$25</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->                                                         
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>03.</span>Creme Brulee</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$64</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>usce tempus tempus maximus volutpat</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->                                                         
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>04.</span>Lemon Meringue</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$12</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>usce tempus tempus maximus volutpat</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->                                                          
                                            </div>
                                        </div>
                                        <!--tab end -->                                                    
                                        <!--tab 4-->
                                        <div class="tab">
                                            <div id="tab-4" class="tab-content">
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>01.</span> Lobster with melted mozarella</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$156</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>Granny help you treat yourself with a different meal everyday</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>02.</span> Butterfly fried shrimps platter</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$98</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->                                                         
                                            </div>
                                        </div>
                                        <!--tab end -->                                                     
                                        <!--tab 5-->
                                        <div class="tab">
                                            <div id="tab-5" class="tab-content">
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>01.</span>Kiwi Coctail</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$12</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>Granny help you treat yourself with a different meal everyday</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>02.</span>Summer Beer</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$21</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->                                                         
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>03.</span>Red Mojitos</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$17</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>usce tempus tempus maximus volutpat</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->                                                         
                                                <!-- header-menu-item-->
                                                <div class="hero-menu-item">
                                                    <div class="hero-menu-item-title fl-wrap">
                                                        <h6><span>04.</span>Cabernet Sauvignon</h6>
                                                        <div class="hmi-dec"></div>
                                                        <span class="hero-menu-item-price">$40</span>
                                                    </div>
                                                    <div class="hero-menu-item-details">
                                                        <p>usce tempus tempus maximus volutpat</p>
                                                    </div>
                                                </div>
                                                <!-- header-menu-item end-->                                                         
                                            </div>
                                        </div>
                                        <!--tab end -->                                                    
                                    </div>
                                    <!--tabs end -->
                                </div>
                            </div>
                        </div>
                        <!--  hero-menu_content end  -->
                        <div class="clearfix"></div>
                        <a href="menu.html" class="hero_btn" style="margin-left:30px;">View Full Menu <i class="fal fa-long-arrow-right"></i></a>
                        <a href="#" class="pdf-link">Dowload PDF</a>
                    </div>
                </div>
                <!--  hero-menu  end-->
            </div>
        </section>
        <!--  section  end-->
        <section data-scrollax-parent="true">
            <div class="container">
                <div class="section-title">
                    <h4>Our awesome team</h4>
                    <h2>Met Our Chefs</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
                <div class="about-wrap  fl-wrap">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- team-item -->
                            <div class="team-box">
                                <div class="team-photo">
                                    <img src="images/team/1.jpg" alt="" class="respimg">
                                    <div class="overlay"></div>
                                    <div class="team-social">
                                        <span class="ts_title">Follow</span>
                                        <ul class="no-list-style">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info fl-wrap">
                                    <h3> Kevin  Gray </h3>
                                    <h4>Master chef in New York</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                </div>
                            </div>
                        </div>
                        <!-- team-item  end-->
                        <!-- team-item -->
                        <div class="col-md-4">
                            <div class="team-box">
                                <div class="team-photo">
                                    <img src="images/team/2.jpg" alt="" class="respimg">
                                    <div class="overlay"></div>
                                    <div class="team-social">
                                        <span class="ts_title">Follow</span>
                                        <ul class="no-list-style">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info fl-wrap">
                                    <h3> Austin Evon </h3>
                                    <h4>Master chef in Florida</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                </div>
                            </div>
                        </div>
                        <!-- team-item end  -->
                        <!-- team-item -->
                        <div class="col-md-4">
                            <div class="team-box">
                                <div class="team-photo">
                                    <img src="images/team/3.jpg" alt="" class="respimg">
                                    <div class="overlay"></div>
                                    <div class="team-social">
                                        <span class="ts_title">Follow</span>
                                        <ul class="no-list-style">
                                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-info fl-wrap">
                                    <h3> Taylor Roberts </h3>
                                    <h4>Master chef in Maiami</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                </div>
                            </div>
                        </div>
                        <!-- team-item end  -->
                        <div class="col-md-8">
                            <div class="align-text-block">
                                <h4>Want to cook something tasty? Read our best recipes.</h4>
                                <a href="blog.html" class="btn">Recipes Book <i class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="section-dec sec-dec_top"></div>
                </div>
                <div class="wave-bg wave-bg_right " data-scrollax="properties: { translateY: '-150px' }"></div>
            </div>
        </section>
        <!-- section end  --> 
        <!-- section   -->
        <section class="column-section no-padding hidden-section" data-scrollax-parent="true">
            <div class="column-wrap-bg right-wrap">
                <div class="bg par-elem "  data-bg="images/bg/10.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="column-wrap-bg-text">
                    <h3>Our Store</h3>
                    <h4>Want to order food home? Visit our online store.</h4>
                    <a href="about.html" class="btn  ajax">Buy online <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="column-section-wrap left-column-section dark-bg" >
                <div class="container"  >
                    <div class="column-text">
                        <div class="section-title">
                            <h4>Book a table</h4>
                            <h2>Upcoming  Events</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <!-- events-carousel-wrap -->
                        <div class="events-carousel-wrap fl-wrap">
                            <div class="events-carousel fl-wrap">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="event-carousel-item">
                                                <h4>Jazz Band Live Event</h4>
                                                <span class="event-date">25 may 2020</span>
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. </p>
                                            </div>
                                        </div>
                                        <!-- swiper-slide end -->
                                        <!-- swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="event-carousel-item">
                                                <h4>Wine and Steak Day</h4>
                                                <span class="event-date">19 June 2020</span>
                                                <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit   gravida. </p>
                                            </div>
                                        </div>
                                        <!-- swiper-slide end -->
                                        <!-- swiper-slide -->
                                        <div class="swiper-slide">
                                            <div class="event-carousel-item">
                                                <h4>Freedom Day Celebration</h4>
                                                <span class="event-date">14 October 2020</span>
                                                <p>Lorem Ipsum generators on the Internet king this the first true generator laudantium totam aperiam. </p>
                                            </div>
                                        </div>
                                        <!-- swiper-slide end -->                                                        
                                    </div>
                                </div>
                            </div>
                            <div class="ec-button ec-button-prev"><i class="fas fa-caret-left"></i></div>
                            <div class="ec-button ec-button-next"><i class="fas fa-caret-right"></i></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="bold-separator"><span></span></div>
                        <!-- events-carousel-wrap end -->
                        <a href="#" class="hero_btn no-align show-rb">Book Table Now<i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="illustration_bg">
                    <div class="bg"  data-bg="images/bg/dec/6.png"></div>
                </div>
            </div>
        </section>
        <!-- section end  --> 
        <!-- section   -->                        
        <section>
            <div class="brush-dec2 brush-dec_bottom"></div>
            <div class="container">
                <div class="section-title">
                    <h4>What said about us</h4>
                    <h2>Customer Reviews</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="testimonilas-carousel-wrap fl-wrap">
                <div class="tc-button tc-button-next"><i class="fas fa-caret-right"></i></div>
                <div class="tc-button tc-button-prev"><i class="fas fa-caret-left"></i></div>
                <div class="testimonilas-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--testi-item-->
                            <div class="swiper-slide">
                                <div class="testi-item fl-wrap">
                                    <div class="testi-avatar"><img src="images/avatar/2.jpg" alt=""></div>
                                    <div class="testimonilas-text fl-wrap">
                                        <h3>Andy Dimasky</h3>
                                        <div class="star-rating" data-starrating="5"> </div>
                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                        <span class="testi-number">01.</span>
                                    </div>
                                </div>
                            </div>
                            <!--testi-item end-->
                            <!--testi-item-->
                            <div class="swiper-slide">
                                <div class="testi-item fl-wrap">
                                    <div class="testi-avatar"><img src="images/avatar/3.jpg" alt=""></div>
                                    <div class="testimonilas-text fl-wrap">
                                        <h3>Frank Dellov</h3>
                                        <div class="star-rating" data-starrating="4"> </div>
                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                        <span class="testi-number">02.</span>
                                    </div>
                                </div>
                            </div>
                            <!--testi-item end-->
                            <!--testi-item-->
                            <div class="swiper-slide">
                                <div class="testi-item fl-wrap">
                                    <div class="testi-avatar"><img src="images/avatar/4.jpg" alt=""></div>
                                    <div class="testimonilas-text fl-wrap">
                                        <h3>Centa Simpson</h3>
                                        <div class="star-rating" data-starrating="5"> </div>
                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                        <span class="testi-number">03.</span>
                                    </div>
                                </div>
                            </div>
                            <!--testi-item end-->
                            <!--testi-item-->
                            <div class="swiper-slide">
                                <div class="testi-item fl-wrap">
                                    <div class="testi-avatar"><img src="images/avatar/5.jpg" alt=""></div>
                                    <div class="testimonilas-text fl-wrap">
                                        <h3>Nicolo Svensky</h3>
                                        <div class="star-rating" data-starrating="5"> </div>
                                        <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "</p>
                                        <span class="testi-number">04.</span>
                                    </div>
                                </div>
                            </div>
                            <!--testi-item end-->
                        </div>
                    </div>
                </div>
                <div class="tc-pagination"></div>
            </div>
        </section>
        <!-- section end  --> 
    </div>
    <!-- content end  -->
@endsection  