<h2>Product list</h2>
@foreach ($product as $product)
   <a href="{{route('backoffice-update',['id'=>$id])}}"><p> {{ $product->id }} - {{ $product->name }} - €{{ $product->price/100 }}</p></a>
@endforeach
