@extends('layout.main')

@section('title','Offers')
@section('content')
    <!-- products listing -->
    <!-- Latest SHirts -->
    <div class="row">
        @forelse($products as $product)

          <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="{{URL::to('/item/'.$product->id)}}">
                            <img src="{{url('images',$product->image)}}"/>
                        </a>
                    </div>
                    <a href="{{URL::to('/item/'.$product->id)}}">
                        <h3>
                           {{$product->name}}
                        </h3>
                    </a>
                    <h5>
                    {{$product->price}}
                    </h5>
                    <p>
                    {{$product->description}}
                    </p>
                </div>
            </div>

           

        @empty
        <h3>No product</h3>
       @endforelse

        
    </div>
@endsection