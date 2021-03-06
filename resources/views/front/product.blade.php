@extends('layout.main')

@section('title','Products')
@section('content')

<div class="row">
            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                        <img src="{{url('images',$product->image)}}"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="price-tag">${{$product->price}}</span> 
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <p>
                            {!! $product->description !!}
                        </p>
                    </div>
                </div>
                <br>
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                Size
                             
                            </label>
                            <p>
                            {!! $product->size !!}
                        </p>
                            <a href="#" class="button  expanded">Add to Cart</a>
                        </div>
                    </div>
               

                </div>
            </div>
            </div>

            @endsection