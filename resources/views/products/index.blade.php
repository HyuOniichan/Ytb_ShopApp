<x-layout>
    
<h1>Products</h1> 

<x-errors />

<a href="{{ route('products.create') }}">Create product</a>

@foreach ($products as $product) 
    <h2> <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a> </h2>
    <p>{{ $product->description }}</p>
    <p>{{ $product->quantity }}</p>
@endforeach

{{ $products->links('vendor/pagination/simple-default') }}

</x-layout> 
