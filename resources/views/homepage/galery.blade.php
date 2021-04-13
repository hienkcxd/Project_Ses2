<section id="section-portfolio" class="no-top no-bottom">
    <div class="container">

        <div class="spacer-single"></div>

        <!-- portfolio filter begin -->
        <div class="row">
            <div class="col-md-12 text-center">
                <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                    <li><a href="#" data-filter="*" class="selected">All Projects</a></li>
                    <li><a href="#" data-filter=".residential">Residential</a></li>
                    <li><a href="#" data-filter=".hospitaly">Hospitaly</a></li>
                    <li><a href="#" data-filter=".office">Office</a></li>
                    <li><a href="#" data-filter=".commercial">Commercial</a></li>
                </ul>

            </div>
        </div>
        <!-- portfolio filter close -->

    </div>

    <div id="gallery" class="gallery full-gallery de-gallery pf_full_width wow fadeInUp" data-wow-delay=".3s">

        <!-- gallery item -->
        <div class="item residential">
            <div class="picframe">
                <a class="simple-ajax-popup-align-top" href="project-details-1.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Eco Green Interior</span>
                                    </span>
                                </span>
                </a>
                <img src="{{ asset('images/portfolio/pf(1).jpg') }}" alt="" />
            </div>
        </div>
        <!-- close gallery item -->

        <!-- gallery item -->
        <div class="item hospitaly">
            <div class="picframe">
                <a class="simple-ajax-popup-align-top" href="project-details-2.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Modern Elegance Suite</span>
                                    </span>
                                </span>
                </a>

                <img src="{{ asset('images/portfolio/pf(2).jpg') }}" alt="" />
            </div>
        </div>
        <!-- close gallery item -->

        <!-- gallery item -->
        <div class="item hospitaly">
            <div class="picframe">
                <a class="simple-ajax-popup-align-top" href="project-details-3.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Apartment Renovation</span>
                                    </span>
                                </span>
                </a>

                <img src="{{ asset('images/portfolio/pf(3).jpg') }}" alt="" />
            </div>
        </div>
        <!-- close gallery item -->

        <!-- gallery item -->
        <div class="item residential">
            <div class="picframe">
                <a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Youtube Video</span>
                                    </span>
                                </span>
                </a>
                <img src="{{ asset('images/portfolio/pf(4).jpg') }}" alt="" />
            </div>
        </div>
        <!-- close gallery item -->

        <!-- gallery item -->
        <div class="item office">
            <div class="picframe">
                <a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Vimeo Video</span>
                                    </span>
                                </span>
                </a>
                <img src="{{ asset('images/portfolio/pf(5).jpg') }}" alt="" />
            </div>
        </div>
        <!-- close gallery item -->

        <!-- gallery item -->
        <div class="item commercial">
            <div class="picframe">
                <a class="simple-ajax-popup-align-top" href="project-details.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Restaurant In Texas</span>
                                    </span>
                                </span>
                </a>
                <img src="{{ asset('images/portfolio/pf(6).jpg') }}" alt="" />
            </div>
        </div>
        <!-- close gallery item -->

        <!-- gallery item -->
        <div class="item residential">
            <div class="picframe">
                <a class="simple-ajax-popup-align-top" href="project-details-youtube.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Summer House</span>
                                    </span>
                                </span>
                </a>

                <img src="{{ asset('images/portfolio/pf(7).jpg') }}" alt="" />
            </div>
        </div>
        <!-- close gallery item -->

        <!-- gallery item -->
        <div class="item office">
            <div class="picframe">
                <a class="simple-ajax-popup-align-top" href="project-details-vimeo.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Office On Space</span>
                                    </span>
                                </span>
                </a>

                <img src="{{ asset('images/portfolio/pf(8).jpg') }}" alt="" />
            </div>
        </div>
        <!-- close gallery item -->

    </div>

    <div id="loader-area">
        <div class="project-load"></div>
    </div>
</section>
<!-- section close -->


<!-- section begin -->
<section id="view-all-projects" class="call-to-action bg-color text-center" data-speed="5" data-type="background">
    <a href="{{ route('pro') }}" class="btn btn-line-black btn-big">View All Projects</a>
</section>
