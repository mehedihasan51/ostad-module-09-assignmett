@extends('layouts.app')

@section('content')

<div class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: zoomIn;">
                    <p>My Portfolio</p>
                    <h2>My Excellent Portfolio</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="portfolio-filter">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-1" class="">Web Design</li>
                            <li data-filter=".filter-2" class="">Mobile Apps</li>
                            <li data-filter=".filter-3">Game Dev</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container" style="position: relative; height: 645px;">
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s" style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-delay: 0s; animation-name: fadeInUp;">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="http://127.0.0.1:8000/assets/img/portfolio-1.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>eCommerce Website</h3>
                                <a class="btn" href="http://127.0.0.1:8000/assets/img/portfolio-1.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.2s" style="position: absolute; left: 380px; top: 0px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="http://127.0.0.1:8000/assets/img/portfolio-2.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Product Landing Page</h3>
                                <a class="btn" href="http://127.0.0.1:8000/assets/img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.4s" style="position: absolute; left: 760px; top: 0px; visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="http://127.0.0.1:8000/assets/img/portfolio-3.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>JavaScript quiz game</h3>
                                <a class="btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.6s" style="position: absolute; left: 0px; top: 322px; visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="http://127.0.0.1:8000/assets/img/portfolio-4.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>JavaScript drawing</h3>
                                <a class="btn" href="http://127.0.0.1:8000/assets/img/portfolio-4.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.8s" style="position: absolute; left: 380px; top: 322px; visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="http://127.0.0.1:8000/assets/img/portfolio-5.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Social Mobile Apps</h3>
                                <a class="btn" href="http://127.0.0.1:8000/assets/img/portfolio-5.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="1s" style="position: absolute; left: 760px; top: 322px; visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="http://127.0.0.1:8000/assets/img/portfolio-6.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Company Website</h3>
                                <a class="btn" href="http://127.0.0.1:8000/assets/img/portfolio-6.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection