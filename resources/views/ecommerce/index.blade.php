@extends('Ecommerce/templates/base')
<!-- @section('title','Home') -->
@section('utama')
<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets2/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
<main>

    <!-- slider Area Start -->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height" data-background="assets2/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="assets2/img/hero/hero_man.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInRight" data-delay=".4s">60% Discount</span>
                                <h1 data-animation="fadeInRight" data-delay=".6s">Winter <br> Collection</h1>
                                <p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2020!</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                    <a href="/industries" class="btn hero-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height" data-background="assets2/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="assets2/img/hero/hero_man.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInRight" data-delay=".4s">60% Discount</span>
                                <h1 data-animation="fadeInRight" data-delay=".6s">Winter <br> Collection</h1>
                                <p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2020!</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                    <a href="/industries" class="btn hero-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Category Area Start-->
    <section class="category-area section-padding30">
        <div class="container-fluid">
            <!-- Section Tittle -->
            <div class="category-wrapper">
                <div id="row" style="padding-top:20px;padding-left: 50px;background: linear-gradient(-145deg, rgb(255, 255, 255), rgb(245, 129, 32) 30%, rgb(255, 172, 103));">
                    <div class="bar" style="padding-bottom:10px;color: black; font-size: 25px; "><b>Kategori Produk</b>  </div>
                    <div class="brands-wrapper  row">
                        @foreach($categories as $row)
                        <div role="button" tabindex="0" class style="width: 130px; padding-bottom: 40px;">
                            <div class="product-item">
                                <div class="product-img">
                                <img class="img-fluid" src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
                            </div>
                            <a href="{{ url('/product_list/'. $row->slug) }}">
                                <h6 align="center">{{ $row->name }}</h6>
                            </a>
                           </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Area End-->
    <section class="pt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mr-auto">
        <div class="section-title">
          <h2 class="title">Featured <span>Products</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel no-pb slide-arrow-2" data-dots="false" data-nav="true" data-items="4" data-lg-items="3"
          data-md-items="2" data-sm-items="2" data-margin="30" data-autoplay="true">
          @foreach($products as $row)
            <div class="item">
                <div class="product-item">
                <div class="product-img">
                    <img src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}" width="300px" height="400px">
                    <div class="product-overlay">
                    <ul class="list-unstyled">
                        <li>
                        <a href="#"> <i class="far fa-heart"></i>
                        </a>
                        </li>
                        <li>
                        <a href="{{ url('/single-product/' . $row->slug) }}"> <i class="far fa-eye"></i>
                        </a>
                        </li>
                        <li>
                        <a href="#"> <i class="fas fa-signal"></i>
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="product-desc"> <a href="{{ url('/single-product/' . $row->slug) }}" class="product-name">
                {{ $row->name }}        

                    </a>
                    <span class="product-price">
                {{$row->price}}
                    </span>
                </div>
                    <form action="{{ url('/single-product/' . $row->slug) }}" >
                        <!-- <input type="hidden" name="_token" value="WMUxd9ta4grEqBPMmZroFPxzYEcxohRF6ngebIiu">                <input type="hidden" name="qty" value="1">
                        <input type="hidden" name="product_id" value="3"> -->
                        <div class="product-btn">
                        <button class="btn btn-theme btn-block"><span>Add to Cart</span> <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
            @endforeach

          </div>
      </div>
    </div>
  </div>
</section>
<section class="pt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mr-auto">
        <div class="section-title">
          <h2 class="title">Featured <span>Products</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel no-pb slide-arrow-2" data-dots="false" data-nav="true" data-items="4" data-lg-items="3"
          data-md-items="2" data-sm-items="2" data-margin="30" data-autoplay="true">
          @foreach($products as $row)
            <div class="item">
                <div class="product-item">
                <div class="product-img">
                    <img src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}" width="300px" height="400px">
                    <div class="product-overlay">
                    <ul class="list-unstyled">
                        <li>
                        <a href="#"> <i class="far fa-heart"></i>
                        </a>
                        </li>
                        <li>
                        <a href="{{ url('/single-product/' . $row->slug) }}"> <i class="far fa-eye"></i>
                        </a>
                        </li>
                        <li>
                        <a href="#"> <i class="fas fa-signal"></i>
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="product-desc"> <a href="{{ url('/single-product/' . $row->slug) }}" class="product-name">
                {{ $row->name }}        

                    </a>
                    <span class="product-price">
                {{$row->price}}
                    </span>
                </div>
                    <form action="{{ url('/single-product/' . $row->slug) }}">
                        <!-- <input type="hidden" name="_token" value="WMUxd9ta4grEqBPMmZroFPxzYEcxohRF6ngebIiu">                <input type="hidden" name="qty" value="1">
                        <input type="hidden" name="product_id" value="3"> -->
                        <div class="product-btn">
                        <button class="btn btn-theme btn-block"><span>Add to Cart</span> <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
            @endforeach

          </div>
      </div>
    </div>
  </div>
</section>

<section class="pt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mr-auto">
        <div class="section-title">
          <h2 class="title">New <span>Products</span></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="owl-carousel no-pb slide-arrow-2" data-dots="false" data-nav="true" data-items="4" data-lg-items="3"
          data-md-items="2" data-sm-items="2" data-margin="30" data-autoplay="true">
          @foreach($products as $row)
            <div class="item">
                <div class="product-item">
                <div class="product-img">
                    <img src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}" width="300px" height="400px">
                    <div class="product-overlay">
                    <ul class="list-unstyled">
                        <li>
                        <a href="#"> <i class="far fa-heart"></i>
                        </a>
                        </li>
                        <li>
                        <a href="{{ url('/single-product/' . $row->slug) }}"> <i class="far fa-love">Lihat</i>
                        </a>
                        </li>
                        <li>
                        <a href="#"> <i class="fas fa-signal"></i>
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                <div class="product-desc"> <a href="{{ url('/single-product/' . $row->slug) }}" class="product-name">
                {{ $row->name }}        

                    </a>
                    <span class="product-price">
                {{$row->price}}
                    </span>
                </div>
                    <form action="{{ url('/single-product/' . $row->slug) }}">
                        <!-- <input type="hidden" name="_token" value="WMUxd9ta4grEqBPMmZroFPxzYEcxohRF6ngebIiu">                <input type="hidden" name="qty" value="1">
                        <input type="hidden" name="product_id" value="3"> -->
                        <div class="product-btn">
                        <button class="btn btn-theme btn-block"><span>Add to Cart</span> <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
            @endforeach

          </div>
      </div>
    </div>
  </div>
</section>


    <!-- Latest Products Start -->




    
    <!-- Best Product Start -->
    <div class="best-product-area lf-padding">
        <div class="product-wrapper bg-height" style="background-image: url('assets2/img/categori/card.png')">
            <div class="container position-relative">
                <div class="row justify-content-between align-items-end">
                    <div class="product-man position-absolute  d-none d-lg-block">
                        <img src="assets2/img/categori/card-man.png" alt="">
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">
                        <div class="vertical-text">
                            <span>Manz</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="best-product-caption">
                            <h2>Find The Best Product<br> from Our Shop</h2>
                            <p>Designers who are interesten creating state ofthe.</p>
                            <a href="#" class="black-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape -->
        <div class="shape bounce-animate d-none d-md-block">
            <img src="assets2/img/categori/card-shape.png" alt="">
        </div>
    </div>
    <!-- Best Product End-->
    <!-- Best Collection Start -->
    <div class="best-collection-area section-padding2">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-end">
                <!-- Left content -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="best-left-cap">
                        <h2>Best Collection of This Month</h2>
                        <p>Designers who are interesten crea.</p>
                        <a href="#" class="btn shop1-btn">Shop Now</a>
                    </div>
                    <div class="best-left-img mb-30 d-none d-sm-block">
                        <img src="assets2/img/collection/collection1.png" alt="">
                    </div>
                </div>
                <!-- Mid Img -->
                <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                    <div class="best-mid-img mb-30 ">
                        <img src="assets2/img/collection/collection2.png" alt="">
                    </div>
                </div>
                <!-- Riht Caption -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="best-right-cap ">
                        <div class="best-single mb-30">
                            <div class="single-cap">
                                <h4>Menz Winter<br> Jacket</h4>
                            </div>
                            <div class="single-img">
                                <img src="assets2/img/collection/collection3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="best-right-cap">
                        <div class="best-single mb-30">
                            <div class="single-cap active">
                                <h4>Menz Winter<br>Jacket</h4>
                            </div>
                            <div class="single-img">
                                <img src="assets2/img/collection/collection4.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="best-right-cap">
                        <div class="best-single mb-30">
                            <div class="single-cap">
                                <h4>Menz Winter<br> Jacket</h4>
                            </div>
                            <div class="single-img">
                                <img src="assets2/img/collection/collection5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Collection End -->
    <!-- Latest Offers Start -->
    <div class="latest-wrapper lf-padding">
        <div class="latest-area latest-height d-flex align-items-center" data-background="assets2/img/collection/latest-offer.png">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                        <div class="latest-caption">
                            <h2>Get Our<br>Latest Offers News</h2>
                            <p>Subscribe news latter</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6 ">
                        <div class="latest-subscribe">
                            <form action="#">
                                <input type="email" placeholder="Your email here">
                                <button>Shop Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- man Shape -->
            <div class="man-shape">
                <img src="assets2/img/collection/latest-man.png" alt="">
            </div>
        </div>
    </div>
    <!-- Latest Offers End -->
    <!-- Shop Method Start-->
    <div class="shop-method-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-package"></i>
                        <h6>Free Shipping Method</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-unlock"></i>
                        <h6>Secure Payment System</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-reload"></i>
                        <h6>Secure Payment System</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Method End-->


</main>


@endsection