@extends('Ecommerce/templates/base')
<!-- @section('title','Home') -->
@section('utama')
        
   <!-- slider Area Start-->
   <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Deskripsi Produk</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class=" col-md-5" >
          <div class="product_img_slide owl-carousel">
            <div class="single_product_img">
              <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}" alt="#" width="100%" height="300px">
            </div>
            <div class="single_product_img">
              <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}" alt="#" width="100%" height="300px">
            </div>
            <div class="single_product_img">
              <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->name }}" alt="#" width="100%" height="300px">
            </div>
          </div>
        </div>
        <br><br>

        &nbsp;
        &nbsp;

        <div class="col-md-5">
        <div class="table-responsive">
          <table class="table">
            <thead style="background-color: #FF4500;"  >
              <tr>
                <th scope="col">NAMA RESELLER</th>
                <th scope="col">STOK</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <h3>Reseller</h3>
                </td>
                <td>
                  <h5>2345</h5>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- <div class="single_product_text text-left"> -->
             
                  <p><a href="#" class="button primary-bg text-white w-10 btn_1"><i class="fas fa-heart"></i></a>
              
                                  
            <i>Like <?php echo "1200"?> orang</i></p>
            
            &nbsp;
            <table class="table">
              <thead>
                <tr>
                  <th style="background-color: #F0F8FF">
                    <p><b>Harga : </b> &nbsp;&nbsp;&nbsp;&nbsp;
                    <b>Rp {{ number_format($product->price) }}</b></p>
                  <th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
              <tr>
                <td>
                  <i>{{ $product->category->name }}</i>
                </td>
              </tr>
              
            </table>
          
        </div>
        </div>

      </div>
       
        <div class="single_product_text text-left">
          
            <h5>{{ $product->name }}<br>
                rebound pillows</h5>
            <p>
               {{ $product->description }}
            </p>
            <div class="card_area">
                <!-- <div class="product_count_area">
                    <p>Quantity</p>
                    <div class="product_count d-inline-block">
                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                        <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                    </div>
                    <p>$5</p>
                </div> -->
              <div class="add_to_cart">
                  <a href="https://api.whatsapp.com/send?phone=+6281252641008" class="btn_3">Chat Wa</a>
              </div>
            </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- subscribe part end -->

  @endsection