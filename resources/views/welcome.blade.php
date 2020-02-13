@extends('layouts.app')

@section('content')
  <div class="home-page">
    <!--================Home Banner Area =================-->
    <section class="home_banner_area" style="background: url('{{asset('images/home-banner.jpg')}}') no-repeat center center;
  background-size: cover;">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="home_left_img">
                <img class="img-fluid" src="{{asset('images/home-left.png')}}">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="banner_content">
                <h2>
                  Profit Margin <br>Calculator
                </h2>
                <p>
                  This easy calculator will help you determine selling prices for your products in order to save money and increase profits.
                </p>
                <div class="d-flex align-items-center">
                  <button type="button" class="btn btn-light btn-lg mr-3">Get Started</button>
                  <button type="button" class="btn btn-outline-light btn-lg">Buy ProPlix</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg width="100%" height="200px" viewBox="0 0 1920 200" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path
              d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
              id="Path"></path>
          </g>
        </g>
      </svg>
    </section>

    <!--================End Home Banner Area =================-->
    
    <section class="home-center-content">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="title text-center">
              <h2 class="section-heading">Save Your Time To <br> Using CalPro</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <span class="icon fa fa-calculator"></span>
              </div>
              <h3 class="mb-3">Easy-to-use calculator</h3>
              <p>Easy-to-use profit margin calculator can help you find a profitable selling price for your product.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <span class="icon fa fa-toggle-off"></span>
              </div>
              <h3 class="mb-3">Profiting off each sale</h3>
              <p>You can effectively price your products and start profiting off each sale.</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <span class="icon fa fa-cloud-upload"></span>
              </div>
              <h3 class="mb-3">Save Report</h3>
              <p>Save profit margin calculated Report. Access any time anywhere, your recently saved report. </p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection
