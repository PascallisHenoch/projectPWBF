@extends('template')

@section('container')

<br/>
<b><h2><strong><p align="center">Aplikasi Surveilans & informasi Pencegahan Stunting</h2></b></strong>

    <h5></h5>
    <script src="js/script.js"></script>
    <br/>
    
    <html>
      <font face="Sans-serif">
        <body><p style="text-indent: 40px;">
          Aplikasi Surveilans & informasi Pencegahan Stunting) adalah aplikasi tepat guna yang 
          dapat menghubungkan antara kader posyandu dengan pihak puskesmas dan orang tua dalam pencatatan 
          status gizi balita sebagai upaya pencegahan stunting. Aplikasi ini bertujuan untuk melacak, 
          mencatat dan merekam status gizi balita secara tepat, cepat dan sesuai dengan pengukuran di 
          masing - masing posyandu. Sehingga jika ada balita yang terindikasi mengalami stunting maka 
          langsung terlihat pada rekap laporan yang ada pada masing – masing posyandu.
        </p></body>
      </font> 
    </html>
    <br/>

    {{-- <img src="img/{{ $image2 }}" alt="{{ $image2 }}" width="300"> --}}

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item text-center active">
            <img src="img/gallery/11.jpg" width="300px" height="400px" alt="First slide">
          </div>
          <div class="carousel-item text-center">
            <h6></h6>
            <img src="img/gallery/22.png" width="300px" height="400px" alt="Second slide">
          </div>
          <div class="carousel-item text-center">
            <h6></h6>
            <img src="img/gallery/77.jpeg" width="300px" height="400px" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" style="background-color: black;" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" style="background-color: black;" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      
      
@endsection
        
   