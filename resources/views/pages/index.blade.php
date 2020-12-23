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
                                    <div class="bg" data-bg="{{ asset('assets/images/bg/19.jpg') }}"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <!--ms_item end-->
                            <!--ms_item-->
                            <div class="swiper-slide ">
                                <div class="ms-item_fs fl-wrap">
                                    <div class="bg" data-bg="{{ asset('assets/images/bg/1.jpg') }}"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <!--ms_item end-->
                            <!--ms_item-->
                            <div class="swiper-slide">
                                <div class="ms-item_fs fl-wrap">
                                    <div class="bg" data-bg="{{ asset('assets/images/bg/7.jpg') }}"></div>
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
                    <h4>Shërbimi me i mirë me cilësi te lartë</h4>
                    <h2>Mirëse vini në Sense Resto-Lounge</h2>
                    <a href="{{ route('pages.menu') }}" class="hero_btn">Shiko Menunë<i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <!--hero_promo-wrap-->
        <div class="hero_promo-wrap bot-element2">
            <div class="hero_promo-button">
                <a href="https://www.youtube.com/watch?v=OQ9-K23NM0w" class="image-popup"><i class="fas fa-play"></i></a>
            </div>
            <div class="hero_promo-title">
                <h4>Shiko Video Spot</h4>
            </div>
        </div>
        <!--hero_promo-wrap end-->
        <!--hero-social-->
        <div class="hero-social">
            <ul>
                <li><a href="https://www.facebook.com/Sense-Resto-Lounge-114697670440817" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/sense_resto_lounge/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/watch?v=OQ9-K23NM0w" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a href="https://www.linkedin.com/in/sense-resto-lounge-2825b31b9/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
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
                    <span>Shiko më shumë!</span>
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
    <div class="content" id="about">
        <section class="hidden-section big-padding" data-scrollax-parent="true" id="sec2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title text-align_left">
                            <h4>Krijo ndjesinë perfekte…në “Sense”</h4>
                            <h2>Disa fjale rreth nesh</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="text-block ">
                            <p>Idetë e bukura nisin pa plan!
                                E tillë ishte dhe dëshira për të realizuar një projekt unik në formën e një ambienti të ri në zemër të Tiranës, misioni, vizioni dhe vendndodhja e të cilit i japin atij një identitet të veçantë.
                                 “Sense”, e pozicionuar në ish vilën e mbretit Zog, mbart histori, elegancë dhe vlera arkitekturore tepër unike.
                            </p>
                            <p>Restoranti, Bari dhe Shisha lounge me stilin e tyre karakteristik janë projektuar për të mundësuar një përvojë të këndshme për adhuruesit e elegancës dhe modernizmit. Cilësia efikase dhe shërbimi i larmishëm janë faktorët kryesorë mbi të cilët ndërtohet dhe ruhet një ekuilibër i përsosur i detajeve autentike. Çdo hapësirë vishet me një ndjesi të ngrohtë dhe bashkëkohore dhe është ideuar me kujdes për të mundësuar rehati, por edhe intimitet.
                                “SENSE” ju fton të shijoni një paradite relaksuese dhe të qetë, apo një mbrëmje të këndshme dhe të gjallë nën shoqërinë e tingujve të përzgjedhur të muzikës.</p>
                            <a href="{{ route('pages.menu') }}" class="btn fl-btn">Eksploroni Menunë Tonë<i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-collge-wrap fl-wrap">
                            <div class="main-iamge">
                                <img src="{{ asset('assets/images/all/3.jpg') }}"   alt="">
                            </div>
                            <div class="images-collage-item" style="width:65%" data-position-left="68" data-position-top="-15" data-zindex="2" data-opacity="1.0"><img src="{{ asset('assets/images/all/8.jpg') }}" alt=""></div>
                            <div class="images-collage-item col_par" style="width:120px" data-position-left="-23" data-position-top="-17" data-zindex="9" data-scrollax="properties: { translateY: '150px' }"><img src="{{ asset('assets/images/cube.png') }}" alt=""></div>
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
                <div class="bg par-elem "  data-bg="{{ asset('assets/images/bg/12.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="quote-box">
                    <i class="fal fa-quote-right"></i>
                    <p>Krijo ndjesinë perfekte…në “Sense”</p>
                    <div class="signature"><img src="{{ asset('assets/images/signature.png') }}" alt=""></div>
                    <h4>Shefi i Restorantit</h4>
                </div>
            </div>
            <div class="column-section-wrap dark-bg" >
                <div class="container"  >
                    <div class="column-text">
                        <div class="section-title">
                            <h4>Telefono për rezervime</h4>
                            <h2>Orari:</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="work-time fl-wrap">
                            <div class="row">
                                <h3>Çdo Ditë</h3>
                                <div class="col-md-6">
                                    <div class="hours">
                                        08:00<br>
                                        22:00
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3></h3>
                                    <div class="hours">
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="bold-separator"><span></span></div>
                        <div class="big-number"><a href="tel:+3556912345678">+3556912345678</a></div>
                    </div>
                </div>
                <div class="illustration_bg">
                    <div class="bg"  data-bg="{{ asset('assets/images/bg/dec/7.png') }}"></div>
                </div>
            </div>
        </section>
        <!-- section end -->
        <!--  section    -->
        <section data-scrollax-parent="true" id="services">
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
                                        <div class="bg "  data-bg="{{ asset('assets/images/services/1.jpg') }}"></div>
                                        <div class="overlay"></div>
                                        <div class="inner">
                                            <h2>Menu e Pasur dhe me Vlera</h2>
                                            <h4>Zgjidhni nga menuja jonë shumëngjyrëshe.</h4>
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
                                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p> --}}
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
                                        <div class="bg "  data-bg="{{ asset('assets/images/services/2.jpg') }}"></div>
                                        <div class="overlay"></div>
                                        <div class="inner">
                                            <h2>Përbërës të Freskët, Plot Shije</h2>
                                            <h4>Vlera ushqyese dhe shije që mbetet gjatë në mendje.</h4>
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
                                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p> --}}
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
                                        <div class="bg "  data-bg="{{ asset('assets/images/services/3.jpg') }}"></div>
                                        <div class="overlay"></div>
                                        <div class="inner">
                                            <h2>Shefa të Talentuar dhe Kreativë</h2>
                                            <h4>Shefat tanë të specializuar krijojnë art në formën e kombinimeve më unike.</h4>
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
                                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p> --}}
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
                {{-- <a href="about.html" class="btn fl-btn border-btn">Read More About us <i class="fal fa-long-arrow-right"></i></a> --}}
                <div class="images-collage-item col_par" style="width:120px" data-position-left="83" data-position-top="87" data-zindex="1" data-scrollax="properties: { translateY: '150px' }"><img src="{{ asset('assets/images/cube.png') }}" alt=""></div>
            </div>
            <div class="section-bg">
                <div class="bg"  data-bg="{{ asset('assets/images/bg/dec/section-bg.png') }}"></div>
            </div>
        </section>
        <!--  section end  -->
        <!--  section  -->
        <section class="parallax-section dark-bg hidden-section" data-scrollax-parent="true">
            <div class="brush-dec2"></div>
            <div class="brush-dec"></div>
            <div class="bg par-elem bg_tabs"  data-bg="{{ asset('assets/images/bg/4.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="cd-tabs-layer" data-frame="10">
                <div class="tabs-layer"></div>
            </div>
            <div class="overlay op7"></div>
            <div class="container">
                <div class="section-title">
                    <h4>Menuja Speciale.</h4>
                    <h2>Shijo Specialitetet Tona</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
                <!--  hero-menu_header  end-->
                <div class="hero-menu tabs-act fl-wrap">
                    <div class="row">
                        <!--  hero-menu_header-->
                        <div class="col-md-3">
                            <div class="hero-menu_header fl-wrap">
                                <ul class="tabs-menu no-list-style change_bg">
                                    @foreach($menu_categories as $menu_category)
                                    <li @if($loop->iteration === 1)class="current" @else  @endif><a href="#{{ $menu_category->id }}" data-bgtab="{{ asset('storage/images/menu-category/'.$menu_category->image) }}"><span>0{{ $loop->iteration }}.</span>{{ $menu_category->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--  hero-menu_header  end-->
                        <!--  hero-menu_content   -->
                        <div class="col-md-9">
                            <div class="hero-menu_content fl-wrap">
                                @foreach($menu_categories as $menu_category)
                                <div class="tabs-container">

                                    <div class="tab">
                                        <!--tab -->
                                        <div id="{{  $menu_category->id }}" @if($loop->iteration === 1)class="tab-content first-tab" @else class="tab-content" @endif>
                                            <!-- header-menu-item-->
                                            @foreach($menu_category->menu_products()->paginate(6) as $menu_product)

                                            <div class="hero-menu-item">
                                                <div class="hero-menu-item-title fl-wrap">
                                                    <h6><span>0{{ $loop->iteration }}.</span>{{ $menu_product->title }}</h6>
                                                    <div class="hmi-dec"></div>
                                                    <span class="hero-menu-item-price">{{ $menu_product->price }}</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>{{ $menu_product->short_description }}</p>
                                                </div>
                                            </div>
                                            @endforeach

                                            <!-- header-menu-item end-->
                                        </div>
                                        <!--tab end -->
                                    </div>
                                    <!--tabs end -->
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!--  hero-menu_content end  -->
                        <div class="clearfix"></div>
                        <a href="{{ route('pages.menu') }}" class="hero_btn" style="margin-left:30px;">Shiko Menunë e Plotë <i class="fal fa-long-arrow-right"></i></a>
                        {{-- <a href="#" class="pdf-link">Dowload PDF</a> --}}
                    </div>
                </div>
                <!--  hero-menu  end-->
            </div>
        </section>
        <!--  section  end-->
        {{-- <section data-scrollax-parent="true">
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
        </section> --}}
        <!-- section end  -->
        <!-- section   -->
        {{-- <section class="column-section no-padding hidden-section" data-scrollax-parent="true">
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
        </section> --}}
        <!-- section end  -->
        <!-- section   -->
        {{-- <section>
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
        </section> --}}
        <!-- section end  -->
    </div>
    <!-- content end  -->
@endsection
