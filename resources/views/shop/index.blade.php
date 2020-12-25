@extends('layouts.master')

@section('title')
    Laravel shopping cart
@endsection

@section('content')

    @foreach($products->chunk(3) as $productChunk) 
<div class="row ">
    @foreach($productChunk as $product)
    <div class="col-sm-6 col-md-4 ">
    <div class="thumbnail">
      <img src="http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg" alt="..." class="img-responsive">

      <div class="caption">
        <h3 >Product Title</h3>
        <p class="description">description</p>
        <div class="clearfix">
            <div class="pull-left price">12dh</div>
         <a href="#" class="btn btn-success pull-right" role="button">add to cart</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
    @endforeach
@endsection