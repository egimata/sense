@extends('layouts.main')

@section('content')

    <!-- content  -->
    <div class="content">
        <!--  section  -->
        <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="{{ asset('assets/images/bg/10.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h4>Menuja e Restorantit</h4>
                    <h2>Restaurant Menu</h2>
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
                    @foreach ($resto_categories as $resto_category)
                    <li><a @if($loop->iteration === 1)class="scroll-link act-scrlink" @else class="scroll-link" @endif href="#{{ $resto_category->id }}"><span>{{ $resto_category->title }}</span></a></li>
                    @endforeach
                </ul>
            </nav>
            <div class="brush-dec2 brush-dec_bottom"></div>
            <div class="container">
                <!-- menu-wrapper-->
                @foreach($resto_categories as $resto_category)
                    <div class="menu-wrapper single-menu fl-wrap" id="{{ $resto_category->id }}" data-scrollax-parent="true">
                        <div class="menu-wrapper-title fl-wrap">
                            <div class="menu-wrapper-title-item">
                                <h4>{{ $resto_category->title }}</h4>
                                <h5>{{ $resto_category->short_description }}</h5>
                            </div>
                            <div class="bg par-elem "  data-bg="{{ ('storage/images/resto-category/'.$resto_category->image) }}" data-scrollax="properties: { translateY: '40%' }"></div>
                            <div class="overlay"></div>
                            <span class="menu-wrapper-title_number">{{ $loop->iteration }}.</span>
                        </div>
                        <!-- hero-menu-item-->
                        @foreach($resto_category->resto_products as $resto_product)
                        <div class="hero-menu-item">
                            <a href="{{ ('storage/images/resto-products/'.$resto_product->image) }}" class="hero-menu-item-img image-popup"><img src="{{ ('storage/images/resto-products/'.$resto_product->image) }}" alt=""></a>
                            <div class="hero-menu-item-title fl-wrap">
                                <h6>{{ $resto_product->title }}</h6>

                                <div class="hmi-dec"></div>
                                <span class="hero-menu-item-price">{{ $resto_product->price }}L</span>
                                {{-- <div class="add_cart">Add To Cart</div> --}}
                            </div>
                            <div class="hero-menu-item-details">
                                <p>{{ $resto_product->short_description }}</p>
                            </div>
                        </div>
                        @endforeach
                        <!-- hero-menu-item end-->
                    </div>
                    <!-- menu-wrapper end-->
                <div class="dots-separator fl-wrap"><span></span></div>
                @endforeach
                <div class="clearfix"></div>
                <div class="bold-separator bold-separator_dark"><span></span></div>
                <div class="clearfix"></div>
                {{-- <a href="#" class="btn  ">Download menu in PDF<i class="fal fa-long-arrow-right"></i></a> --}}
            </div>
            <div class="section-bg">
                <div class="bg"  data-bg="{{ asset('assets/images/bg/dec/section-bg.png') }}"></div>
            </div>
        </section>
    </div>
    <!-- content end  -->
@endsection
