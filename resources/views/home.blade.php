@extends('template')

@section('container')

<marquee behavior="alternate">
<b><h1><strong>Aplikasi Surveilans & informasi Pencegahan Stunting</h1><br /></strong>
</marquee>

    
    <h5></h5>
    <script src="js/script.js"></script>

    {{-- <img src="img/{{ $image2 }}" alt="{{ $image2 }}" width="300"> --}}

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item text-center active">
            <img class="w-70" src="img/{{ $image2 }}" alt="First slide">
          </div>
          <div class="carousel-item text-center">
            <h6></h6>
            <img class="w-35" src="img/child.png" alt="Second slide">
          </div>
          <div class="carousel-item text-center">
            <h6></h6>
            <img class="w-40" src="img/cegah stunting.png" alt="Third slide">
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
        
   