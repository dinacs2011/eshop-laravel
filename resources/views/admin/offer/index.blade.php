@extends('admin.layout.admin')

@section('content')

<table style="width:100%">
@if(!empty($offers))
           
  <tr>
    <th>Values</th>
   
  </tr>
  @forelse($offers as $offer)
  <tr>
    <td>{{$offer->value}}</td>    
  </tr>

 @empty
              <tr> <th>  No Items</th> </tr>
            @endforelse
                @endif
</table>
@endsection