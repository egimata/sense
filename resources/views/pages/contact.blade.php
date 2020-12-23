@extends('layouts.main')

@section('content')
    <!-- wrapper  -->
    <div id="wrapper">
        <!-- content  -->
        <div class="content">
            <section class=" no-padding dark-bg hidden-section">
                <div class="map-container">
                    <div id="singleMap"></div>
                    <div class="scrollContorl"></div>
                </div>
                <!-- map-view-wrap -->
                <div class="map-view-wrap">
                    <div class="container">
                        <div class="map-view-wrap_item">
                            <div class="contact-details">
                                <h4>Kontakto</h4>
                                <ul>
                                    <li><span><i class="fal fa-map-marked-alt"></i> Adress:</span> <a href="https://www.google.com/maps/place/Rruga+Mustafa+Matohiti,+Tiran%C3%AB/@41.3225063,19.8215834,17z/data=!3m1!4b1!4m5!3m4!1s0x1350311befcc9177:0xb1829a1b39d3c13f!8m2!3d41.3225063!4d19.8237721" target="_blank">Rruga Mustafa Matohiti</a></li>
                                    <li><span><i class="fal fa-phone-rotary"></i> Phone:</span> <a href="tel:+3556912345678">+3556912345678</a></li>
                                    <li><span><i class="fal fa-mailbox"></i> Email:</span> <a href="mailto:info@sense.al">info@sense.al</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--map-view-wrap end -->
                <div class="brush-dec"></div>
            </section>
            <!--  section  -->
            <section class="hidden-section big-padding con-sec" data-scrollax-parent="true" id="sec3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="section-title text-align_left">
                                <h2>Kontakto</h2>
                                <div class="dots-separator fl-wrap"><span></span></div>
                            </div>
                            <div class="text-block ">
                                {{-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.
                                </p> --}}
                            </div>
                            <div class="contactform-wrap">
                                <div id="message"></div>
                                <!-- Success message -->
                               @if(Session::has('success'))
                                   <div class="alert alert-success">
                                       {{Session::get('success')}}
                                   </div>
                               @endif
                                <form method="post" class="custom-form" action="{{ route('contact.store') }}">
                                    @csrf
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="name" id="name2" placeholder="Emri *" value=""/>
                                                @if ($errors->has('name'))
                                                <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text"  name="email" id="email2" placeholder="Email *" value=""/>
                                                @if ($errors->has('email'))
                                                <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text"  name="phone" id="phone2" placeholder="Phone *" value=""/>
                                                @if ($errors->has('phone'))
                                                <small class="form-text invalid-feedback">{{ $errors->first('phone') }}</small>
                                                @endif
                                            </div>
                                            <div class="col-sm-6">
                                                <div class=" fl-wrap">
                                                    <select name="subject" id="subject2" class="chosen-select no-search-select">
                                                        <option data-display="Subject">Any</option>
                                                        <option value="Book table">Rezervo Tavoline</option>
                                                        <option value="Banquet">Tjetër</option>
                                                    </select>
                                                    @if ($errors->has('subject'))
                                                    <small class="form-text invalid-feedback">{{ $errors->first('subject') }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <textarea name="message"  id="comments2" cols="40" rows="3" placeholder="Interesi Juaj:"></textarea>
                                        @if ($errors->has('message'))
                                            <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                                        @endif
                                        <div class="clearfix"></div>
                                        <button class="btn float-btn flat-btn color-bg">Dërgo<i class="fal fa-long-arrow-right"></i></button>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="section-dec sec-dec_top"></div>
                        </div>
                        <div class="col-md-5">
                            <div class="column-text_inside fl-wrap dark-bg" >
                                <div class="column-text">
                                    <div class="section-title">
                                        <h4>Telefono për rezervime</h4>
                                        <h2>Orari:</h2>
                                        <div class="dots-separator fl-wrap"><span></span></div>
                                    </div>
                                    <div class="work-time fl-wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Çdo Ditë</h3>
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
                                <div class="illustration_bg">
                                    <div class="bg"  data-bg="{{ asset('assets/images/bg/dec/6.png') }}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-bg">
                    <div class="bg"  data-bg="{{ asset('assets/images/bg/dec/section-bg.png') }}"></div>
                </div>
            </section>
            <!--  section end  -->
            <div class="brush-dec2 brush-dec_bottom"></div>
        </div>
        <!-- content end  -->
@endsection
