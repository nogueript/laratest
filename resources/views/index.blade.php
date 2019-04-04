@extends('layouts.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://images.unsplash.com/photo-1523058109-1b3f8263b2fb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://pbs.twimg.com/media/DYaeXu5VAAABF2L.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://pbs.twimg.com/media/DMfkVVWVwAAGUJb.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<p></p>
<div class="card border-primary mb-3" style="max-width: 18rem;">
   <img class="card-img-top" src="https://previews.123rf.com/images/seamartini/seamartini1608/seamartini160800317/61616196-seafood-seamless-pattern-background-vector-flat-icons-of-sushi-shrimp-squid-salmon-crab-rice-nori-ja.jpg" alt="card image najaaa">
   <div class="card-body">
    <p class="card-text">Some quick example text to build on the card jaaaa</p>
  </div>
</div>
@endsection
