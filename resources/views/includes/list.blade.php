<h2>Product list</h2>
@foreach ($productlist as $product)
   <p> {{ $product->id }} - {{ $product->name }} - €{{ $product->price/100 }}</p>

@endforeach
