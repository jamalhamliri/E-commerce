@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" class="detail-img">
            
        </div>
        <div class="col-sm-6">
            <a href="/"> Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3> price : {{$product['price']}}$</h3>
            <h4>detail : {{$product['descreption']}}</h2>
            <br><br>
            <form action="/add_to_cart">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-success" >Add to Cart</button>

            </form>
            <br>

           
            <button class="btn btn-primary" >Buy Now</button>
            
        </div>
    </div>


</div>

@endsection