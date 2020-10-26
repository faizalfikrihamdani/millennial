<html>

<head>
    <title>Millennial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="{{ asset ('assets2/css/sticky.css')}}">
   <link rel="stylesheet" href="{{ asset ('assets2/css/topnav.css')}}">
</head>

<body>

<div class="topnav">
<a href="/">&#8678;</a>
  <a>Semua Kategori</a>
  
</div></br></br></br></br>


    <div class="sidenav">
        <div class="row">
            <div class="col-2 collapse d-md-flex bg-green pt-2 h-100">
                <!-- <ul class="nav flex-column flex-nowrap"> -->
                    @foreach($categories as $row)
                    <div role="button" class="icon active">
                        <div class="image" style="width: 100%; height: 50px; cursor: pointer; border-radius: 10px;">
                            <img src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}">
                        </div>
                        <center><a href="{{ url('/product_list/'. $row->slug) }}">
                                <h4>{{ $row->name }}</h4>
                            </a></center>
                    </div>
                    @endforeach
                </ul>
            </div>
           
        </div>
    </div>
    
        @yield('utama')



</body>

</html>