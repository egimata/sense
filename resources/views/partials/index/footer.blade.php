<footer class="fl-wrap dark-bg fixed-footer">
    <div class="container">
        <div class="footer-top fl-wrap">
            <a href="index.html" class="footer-logo"><img src="{{ asset('assets/images/logo2.png') }}" alt=""></a>
            {{-- <div class="lang-wrap"><a href="#" class="act-lang">En</a><span>/</span><a href="#">Fr</a></div> --}}
            <div class="footer-social">
                <span class="footer-social-title">Na Ndiqni në :</span>
                <ul>
                    <li><a href="https://www.facebook.com/Sense-Resto-Lounge-114697670440817" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/sense_resto_lounge/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/watch?v=OQ9-K23NM0w" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/sense-resto-lounge-2825b31b9/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- footer-widget-wrap -->
        <div class="footer-widget-wrap fl-wrap">
            <div class="row">
                <!-- footer-widget -->
                <div class="col-md-4">
                    <div class="footer-widget">
                        <div class="footer-widget-title">Rreth Nesh</div>
                        <div class="footer-widget-content">
                            <p>Idetë e bukura nisin pa plan! E tillë ishte dhe dëshira për të realizuar një projekt unik në formën e një ambienti të ri në zemër të Tiranës, misioni, vizioni dhe vendndodhja e të cilit i japin atij një identitet të veçantë. “Sense”, e pozicionuar në ish vilën e mbretit Zog, mbart histori, elegancë dhe vlera arkitekturore tepër unike.</p>
                            {{-- <a href="about.html" class="footer-widget-content-link">Read more</a> --}}
                        </div>
                    </div>
                </div>
                <!-- footer-widget  end-->
                <!-- footer-widget -->
                <div class="col-md-4">
                    <div class="footer-widget">
                        <div class="footer-widget-title">Kontakto </div>
                        <div class="footer-widget-content">
                            <div class="footer-contacts footer-box fl-wrap">
                                <ul>
                                    <li><span>Kontakto :</span><a href="tel:+3556912345678">+3556912345678</a></li>
                                    <li><span>Email :</span><a href="mailto:info@sense.al">info@sense.al</a></li>
                                    <li><span>Adresa : </span><a href="https://www.google.com/maps/place/Rruga+Mustafa+Matohiti,+Tiran%C3%AB/@41.3225063,19.8215834,17z/data=!3m1!4b1!4m5!3m4!1s0x1350311befcc9177:0xb1829a1b39d3c13f!8m2!3d41.3225063!4d19.8237721" target="_blank">Rruga Mustafa Matohiti</a></li>
                                </ul>
                            </div>
                            <a href="{{ route('pages.contact') }}" class="footer-widget-content-link">Kontakto</a>
                        </div>
                    </div>
                </div>
                <!-- footer-widget  end-->
                <!-- footer-widget -->
                <div class="col-md-4">
                    <div class="footer-widget">
                        <div class="footer-widget-title">Shiko Menunë</div>
                        <div class="footer-widget-content">
                            <div class="subcribe-form fl-wrap">
                                <p>Shijo Specialitetet Tona.</p>
                                <a href="{{ route('pages.menu') }}" class="footer-widget-content-link"> Menu </a>
                                {{-- <form id="subscribe" class="fl-wrap">
                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                    <label for="subscribe-email" class="subscribe-message"></label>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-widget  end-->
            </div>
        </div>
        <!-- footer-widget-wrap end-->
        <div class="footer-bottom fl-wrap">
            <div class="copyright">&#169; 2020 Copyright All Right Reserved <a href="https://momentumo.com/" target="_blank">Momentum Group.</a></div>
            <div class="to-top"><span>Back To Top </span><i class="fal fa-angle-double-up"></i></div>
        </div>
    </div>
</footer>
