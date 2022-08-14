@extends('master')
@section("content")
<div class="container custom-product">
<div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>  
<div class="carousel-inner">
    @foreach ($product as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
    <a href="detail/{{$item['id']}}">  
    <img src="{{$item['gallery']}}" class="slider-img" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$item['name']}}</h5>
        <p>{{$item['descreption']}}</p>
        
      </div>
    </a>
    </div>
    @endforeach
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="trending-wrapper">
    <h3>Trending Products</h3>
    @foreach ($product as $item)
    <div class="trend-item">
    <a href="detail/{{$item['id']}}">
      <img src="{{$item['gallery']}}" class="trend-img" alt="...">
      <div class="">
        <h5>{{$item['name']}}</h5>
        
        
      </div>
    </a>
    </div>
    @endforeach
    
  </div>

</div>

@endsection