@extends('Layout/public')
@section('style')
<link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

@endsection

@section('hero')
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('image/carousel1.jpg') }}" alt="">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-warning" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('image/carousel2.jpg') }}" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-warning" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('image/carousel3.jpg') }}" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content <br> for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-warning" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection

@section('content')
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">

      <div class="col-lg-4">
        <img src="{{ asset('icons/cash.svg') }}" alt="" width="180px" height="180px">
        <h2>CASHLESS</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-warning" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img src="{{ asset('icons/cloud.svg') }}" alt="" width="180px" height="180px">
        <h2>CLOUD-BASED</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-warning" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img src="{{ asset('icons/ticket-detailed.svg') }}" alt="" width="180px" height="180px">
        <h2>BOOKING</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
        <p><a class="btn btn-warning" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">


      <div class="row featurette content rounded px-3">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
          <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
          <img src="{{ asset('image/img1.jpg') }}" alt="" style="width: 100%; height:100%" class="rounded">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette content rounded px-3">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Oh yeah, it’ s that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="{{ asset('image/img2.jpg') }}" alt="" style="width: 100%; height:100%" class="rounded">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette content rounded px-3">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
          <img src="{{ asset('image/img3.jpg') }}" alt="" style="width: 100%; height:100%" class="rounded">
        </div>
      </div>

      <hr class="featurette-divider">
  </div> 
@endsection