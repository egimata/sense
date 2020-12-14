@extends('layouts.main')

@section('content')

    <!-- content  -->	
    <div class="content">
        <!--  section  -->  
        <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="images/bg/10.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h4>Special menu offers.</h4>
                    <h2>Discover Our menu</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
            </div>
            <div class="hero-section-scroll">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div>
            <div class="brush-dec"></div>
        </section>
        <!--  section  end-->  
        <!--  section  -->   
        <section>
            <nav class="scroll-nav scroll-init">
                
                <ul>
                    @foreach ($menu_categories as $menu_category)
                    <li><a class="scroll-link act-scrlink" href="#{{ $menu_category->id }}"><span>{{ $menu_category->title }}</span></a></li>
                    @endforeach
                </ul>
                
            </nav>
            <div class="brush-dec2 brush-dec_bottom"></div>
            <div class="container">
                
            
                <!-- menu-wrapper-->
                @foreach($menu_categories as  $menu_category)
                <div class="menu-wrapper single-menu fl-wrap" id="{{ $menu_category->id }}" data-scrollax-parent="true">
                    <div class="menu-wrapper-title fl-wrap">
                        <div class="menu-wrapper-title-item">
                            <h4>{{ $menu_category->title }}</h4>
                            <h5>{{ $menu_category->short_description }}</h5>
                        </div>
                        <div class="bg par-elem "  data-bg="{{ ('storage/images/menu-category/'.$menu_category->image) }}" data-scrollax="properties: { translateY: '40%' }"></div>
                        <div class="overlay"></div>
                        <span class="menu-wrapper-title_number">{{ $loop->iteration }}.</span>
                    </div>

                    <!-- hero-menu-item-->
                    
                    <div class="hero-menu single-menu  tabs-act fl-wrap">
                        <div class="gallery_filter-button btn">Show Filters <i class="fal fa-long-arrow-down"></i></div>
                        <!--  hero-menu_header-->
                        
                        <div class="hero-menu_header fl-wrap gth">
                            <ul class="tabs-menu  no-list-style">
                                @foreach($menu_category->menu_sub_categories as $menu_sub_category)
                                <li @if($loop->iteration === 1)class="current" @else  @endif><a href="#{{ $menu_sub_category->id }}"><span>{{ $loop->iteration }}.</span>{{ $menu_sub_category->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!--  hero-menu_header  end-->
                        <!--  hero-menu_content   -->
                        
                        <div class="hero-menu_content fl-wrap">
                            <div class="tabs-container">
                                <div class="tab">
                                    <!--tab -->
                                    @foreach($menu_category->menu_sub_categories as $menu_sub_category)
                                    
                                    <div id="{{ $menu_sub_category->id }}" @if($loop->iteration === 1)class="tab-content first-tab" @else class="tab-content" @endif>
                                        <!-- hero-menu-item-->
                                        @foreach($menu_sub_category->menu_products as $menu_product)
                                        <div class="hero-menu-item">
                                            <a href="{{ ('storage/images/menu-products/'.$menu_product->image) }}" class="hero-menu-item-img image-popup"><img src="{{ ('storage/images/menu-products/'.$menu_product->image) }}" alt=""></a>
                                            <div class="hero-menu-item-title fl-wrap">
                                                <h6>{{ $menu_product->title }}</h6>
                                                <div class="hmi-dec"></div>
                                                <span class="hero-menu-item-price">{{ $menu_product->price }}L</span>
                                                {{-- <div class="add_cart">Add To Cart</div> --}}
                                            </div>
                                            <div class="hero-menu-item-details">
                                                <p>{{ $menu_product->short_description }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- hero-menu-item end-->                                                          
                                    </div>
                                    @endforeach
                                    <!--tab end -->                                                 
                                </div>
                                <!--tabs end -->
                            </div>
                        </div>
                        
                        <!--  hero-menu_content end  -->
                    </div>
                    <!--  hero-menu  end-->  
                    
                    <!-- hero-menu-item end-->                                    
                </div>
                <!-- menu-wrapper end-->
                <div class="dots-separator fl-wrap"><span></span></div>
                @endforeach
                <div class="clearfix"></div>
                <div class="bold-separator bold-separator_dark"><span></span></div>
                <div class="clearfix"></div>
                <a href="#" class="btn  ">Download menu in PDF<i class="fal fa-long-arrow-right"></i></a>                       
            </div>
            <div class="section-bg">
                <div class="bg"  data-bg="images/bg/dec/section-bg.png"></div>
            </div>						
        </section>
    </div>
    <!-- content end  -->
@endsection