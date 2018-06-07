@extends('admin.layout.admin')

@section('content')

<table style="width:100%">
@if(!empty($products))
           
  <tr>
  
    <th>Name</th>    
    <th>Size</th>
    <th>Price</th>
    <th>Actions</th>
  
</tr>
  @forelse($products as $product)
 
  <tr>
    <td style="text-align: left" >{{$product->name}}</td>    
  
    <td style="text-align: left">{{$product->size}}</td>    
 
    <td style="text-align: left">{{$product->price}}</td>    
    <td style="text-align: left" >
    <a href="{{ route('product.edit', $product->id) }}" >
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                      Edit
                    </a>
     </td>

  </tr>
  

 @empty
              <tr> <th>  No Items</th> </tr>
            @endforelse
                @endif
</table>
@endsection