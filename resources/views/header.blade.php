<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Session;

$total=0;
if(Session::has('user')){
$total= ProductController::cartItem();}
?>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-Comm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Orders</a>
        </li>
        
        
        
        <li class="nav navbar-nav navbar-right" >
          <a class="nav-link" href="#">Carts({{$total}})</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      @if(Session::has('user'))
      <ul class="nav-item dropdown mb-2 mb-lg-0">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           {{Session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/lougout">Logout</a></li>
            </ul>
       
      
      @else
      <button class="btn btn-info m-1"> <a class="nav-link" href="/login">Login</a></button></ul>
      @endif
      </ul>
    </div>
  </div>
</nav>