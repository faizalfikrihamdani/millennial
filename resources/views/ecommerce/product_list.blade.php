@extends('Ecommerce/templates/sticky')
<!-- @section('title','Home') -->
@section('utama')

       
                            <!-- <div class="col-lg-6 col-sm-6"> -->
                            @foreach($products as $category)
                            <div class="main">
                                <img src="{{ asset('storage/products/' . $category->image) }}" alt="{{ $category->name }}" class="img-fluid" width="300px" height="400px" padding="10px" margin="20px">
                                <h4><a href="{{ url('/product_list/'. $category->slug) }}"></a>{{ $category->name }}</h4>
                                <p>Rp {{ number_format($category->price) }}</p>
                            </div>
                            @endforeach
                        <!-- </div> -->
                       
@endsection